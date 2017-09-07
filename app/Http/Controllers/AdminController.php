<?php

namespace App\Http\Controllers;

use DB;
use Mail;
use Auth;
use Hash;
use App\User;
use App\Config;
use App\Content;
use App\Fund;
use App\Ticket;
use App\Brand;
use App\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');

        //get role 
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * [index description]
     * @date   2017-07-19
     * @author vien
     * @return [type]     [description]
     */
    private function _cuser(){
        $id = Auth::id();
        $user = DB::table('users')->where('id', $id)->first();
        return $user;
    }
    public function index(){
        $_cuser = $this->_cuser();
        $_role = $_cuser->role;

        $data = array();
        $data['_role'] = $_role;

        if($_role == '2' ){

            $tickets = DB::table('ticket')->where('user_id', $_cuser->id)->get();
            $total_ticket = count($tickets);
            $data['total_ticket'] = $total_ticket;

            $ticket_today = DB::table('ticket')->where('user_id', $_cuser->id)->whereDate('created_at', DB::raw('CURDATE()'))->get();
            $data['ticket_today'] = $ticket_today;

            $contacts = DB::table('contact')->where('own_id', $_cuser->id)->get();
            $total_contact = count($contacts);
            $data['total_contact'] = $total_contact;
            $today = date('Y-m-d');
            $current_user = $_cuser->id;
            $tickets_run_today = DB::select("
                SELECT flight.* , ticket.* , users.name as user_name, users.role as role
                FROM flight 
                LEFT JOIN ticket ON FIND_IN_SET(flight.id, ticket.flight_detail) != 0
                LEFT JOIN users ON users.id = ticket.user_id
                WHERE ticket.user_id = $current_user 
                AND (flight.start_time Like '$today%'
                    OR flight.end_time Like '$today%')");
            $data['tickets_run_today'] = $tickets_run_today;

        }else if($_role == '1'|| $_role == '3'){

            $tickets = DB::table('ticket')->get();
            $total_ticket = count($tickets);
            $data['total_ticket'] = $total_ticket;
            $ticket_today = DB::table('ticket')->whereDate('created_at', DB::raw('CURDATE()'))->get();
            $data['ticket_today'] = $ticket_today;

            $today = date('Y-m-d');
            $tickets_run_today = DB::select("
                SELECT flight.* ,  ticket.* , users.name as user_name, users.role as role
                FROM flight 
                LEFT JOIN ticket ON FIND_IN_SET(flight.id, ticket.flight_detail) != 0
                LEFT JOIN users ON users.id = ticket.user_id
                WHERE flight.start_time Like '$today%'
                    OR flight.end_time Like '$today%'");
            $data['tickets_run_today'] = $tickets_run_today;
            // print_r($tickets_run_today); die();
            $users = DB::table('users')->get();
            $total_user = count($users);

            $data['total_user'] = $total_user;

            $passengers = DB::table('passenger')->get();
            $total_passenger = count($passengers);

            $data['total_passenger'] = $total_passenger;

            $agency_register = DB::table('agency_register')->where('status', 'sent')->get();
            $total_agency_register = count($agency_register);

            $data['total_agency_register'] = $total_agency_register;
            $contacts = DB::table('contact')->get();
            $total_contact = count($contacts);
            $data['total_contact'] = $total_contact;

        }
        return view('admin.dashboard', ['data' => $data]);
    }
    /**
     * [user description]
     * @date   2017-07-19
     * @author vien
     * @param  Request    $request [description]
     * @return [type]              [description]
     */
    public function user(Request $request){

        $input = $request->input();
        $search = isset($input['s']) ? $input['s'] : '';

        if(Auth::user()->role == '2'){
            return redirect('/admin');
        }

        $users = DB::table('users')
        ->where(function ($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%')
                ->orwhere('email', 'like', '%'.$search.'%')
                ->orwhere('role', 'like', '%'.$search.'%');
            })
        ->paginate(20);

        return view('admin.user', ['users'=> $users, 'search'=> $search]);
    }

    /**
     * [user_detail description]
     * @date   2017-07-19
     * @author vien
     * @param  Request    $request [description]
     * @param  [type]     $id      [description]
     * @return [type]              [description]
     */
    public function user_detail(Request $request, $id = 0){
        if($id == 0){
            $id = Auth::id();
        }
        $input = $request->input();
        $user = DB::table('users')->where('id', $id)->first();
        $fund = DB::table('fund')->where('user_id', $id)->orderBy('created_at', 'desc')->get();

        if(Auth::user()->role == '2'){
            if($id != Auth::id()){
                return redirect('/admin');
            }
        }

        $total_fund = 0;
        foreach ($fund as $key => $value) {
            $total_fund += $value->value;
        }
        $ticket = DB::table('ticket')->where('user_id', $id)->get();

        $output = array(
            'user'=> $user, 
            'active_tab'=> isset($input['active']) ? $input['active'] : 'home', 
            'fund'=>$fund, 
            'total_fund' => $total_fund, 
            'ticket' => $ticket
            );
        return view('admin.user_detail', $output );
    }
    /**
     * [user_new description]
     * @date   2017-07-19
     * @author vien
     * @param  Request    $request [description]
     * @return [type]              [description]
     */
    public function user_new(Request $request){

        $input =(object)array(
            'name' => '',
            'email' => '',
            'birthday' => '',
            'role' => '4',
            );
        $message_err = '';
        return view('admin.user_new', ['input' => $input, 'msg_err' =>  $message_err]);
    }
    /**
     * [user_save description]
     * @date   2017-07-19
     * @author vien
     * @param  Request    $request [description]
     * @return [type]              [description]
     */
    public function user_save(Request $request){

        $input = $request->input();

        $type = $input['type'];
        //validate
        
        if($type == 'edit'){
            $email = $input['email'];
            $user = DB::table('users')->where('email', $email)->first();
            if($user->id != $input['id']){
                $message_err = "Email đã được đăng ký, xin thử email khác";
                return Redirect::back()->with('message',$message_err);
            }
            $id = $input['id'];
            $user = User::find($id);
            $user->name = $input['name'];
            $user->phone = $input['phone'];
            $user->mobile = $input['mobile'];
            $user->address = $input['address'];
            if(Auth::user()->role == '1' && $id != 1){
                $user->role = $input['role'];
            }
            $user->save();
            return redirect('/admin/user/'.$id);
        }
        else{
            $email = $input['email'];

            $user = DB::table('users')->where('email', $email)->first();
            if($user){
                $message_err = "Email đã được đăng ký, xin thử email khác";
                return view('admin.user_new', ['input' => (object)$input, 'msg_err' =>  $message_err ]);
            }

            $password = $input['password'];
            $password_confirm = $input['password_confirm'];

            if(strlen($password) < 8){
                $message_err = "Mật khẩu trên 8 ký tự";
                return view('admin.user_new', ['input' => (object)$input, 'msg_err' =>  $message_err] );
            }

            if($password != $password_confirm){
                $message_err = "Email confirm không chính xác, vui lòng điền lại";
                return view('admin.user_new', ['input' => (object)$input, 'msg_err' =>  $message_err] );
            }

            $new_user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'birthday' => $input['birthday'],
                'password' => bcrypt($input['password']),
                'active' => true,
                'role' => $input['role'],
                'type' => '1',
                ]);
        }
       
        $id = $new_user['attributes']['id'];
        return redirect('/admin/user/'.$id);


    }
    public function save_fund(Request $request){
        $input = $request->input();
        $pass = $input['pass'];

        $user = Auth::user();
        if (!Hash::check($pass, $user->password)) {
            $message_err = "Xin hãy nhập đúng mật khẩu";
            return Redirect::back()->with('message',$message_err);
        }

        $user = Auth::user();
        if($user->role == '1' || $user->role == '3'){
            $user_id = $user->id;
            $fund = new Fund;
            $fund->value = $input['count'];
            $fund->user_id = $input['id'];
            $fund->type = $input['count'] >= 0 ? 'Thêm quỹ' : 'Trừ quỹ' ;
            $fund->add_id = $user_id;
            $fund->save();
            return redirect('/admin/user/'. $input['id'].'?active=fund');

        }else{
            $message_err = "Bạn không có quyền thêm tiền quỹ";
            return Redirect::back()->with('message',$message_err);
        }
    }
    public function save_note(Request $request){
        $input = $request->input();
        $value = $input['value'];
        $id = $input['user_id'];
        DB::table('users')->where('id', $id)->update(['note'=>$value]);
        return redirect('/admin/user/'.$input['user_id'].'?active=other');

    }
    public function save_password(Request $request){
        $input = $request->input();

        $user = Auth::user();

        if($user->role == '1'){
            if($input['new'] != $input['confirm']){
                $message_err = "2 mật khẩu mới không khớp với nhau";
                return Redirect::back()->with('message',$message_err);
            }
            $user = User::find($input['id']);
            $user->password = Hash::make($input['new']);
            $user->save();
            return redirect('/admin/user/'.$input['id']);

        }else{
            $pass = $input['old'];
            $user = Auth::user();
            if (!Hash::check($pass, $user->password)) {
                $message_err = "Xin hãy nhập đúng mật khẩu";
                return Redirect::back()->with('message',$message_err);
            }
            if($input['new'] != $input['confirm']){
                $message_err = "2 mật khẩu mới không khớp với nhau";
                return Redirect::back()->with('message',$message_err);
            }

            $user->password = Hash::make($input['new']);
            $user->save();

            Auth::logout();

            return redirect('/login');

        }

    }
    /**
     * [setting description]
     * @date   2017-07-19
     * @author vien
     * @return [type]     [description]
     */
    public function setting(Request $request){
        $input = $request->input();
        $show = isset($input['show']) ? $input['show'] : 'content';

        $config_data = DB::table('config')->get();
        $config  = array();
        foreach ($config_data as $key => $value) {
            $config[$value->key_config] = $value->value;
        }

        $content_data = DB::table('content')->get();
        $content  = array();
        foreach ($content_data as $key => $value) {
            $content[$value->key_config] = $value->value;
        }
        $services_brand = DB::table('brand_flight')->get();
        return view('admin.setting', ['config'=> (object)$config, 'content' => $content,  'show'=>$show, 'services_brand'=>$services_brand ]);
    }

    public function setting_save(Request $request){
        $input = $request->input();
        foreach ($input as $key => $value) {
            if($key != '_token'){
                if($input['type'] == 'page'){
                    $content = Content::updateOrCreate(
                        ['key_config' => $key],
                        ['value' => $value]
                    );
                }else{
                    $config = Config::updateOrCreate(
                        ['key_config' => $key],
                        ['value' => $value]
                    );
                }
            }
        }
        return redirect('/admin/setting?show='.$input['type']);
    }

    // public function agency_register(){
    //     return view('admin.agency_register');
    // }

    /**
     * [ticket description]
     * @date   2017-07-19
     * @author vien
     * @param  Request    $request [description]
     * @return [type]              [description]
     */
    public function ticket(Request $request){

        $_cuser = $this->_cuser();
        $_role = $_cuser->role;
        $status = array(
            'book' => 'Đã xác nhận, chờ thanh toán',
            'paid' => 'Đã thanh toán',
            'part-paid' => 'Thanh toán một phần',
            'complete' => 'Đã hoàn thành',
            'delete' => 'Đã xóa',
            'cancel' => 'Đã hủy',
            'out-date' => 'Hết hạn thanh toán',
            );

        $input = $request->input();

        $search = isset($input['s']) ? $input['s'] : '';

        if($_role == '2'){

             $tickets = DB::table('ticket')->where('status','<>', 'delete')
            ->where('user_id', $_cuser->id)
            ->where(function ($query) use ($search) {
                $query->where('contact_name', 'like', '%'.$search.'%')
                ->orwhere('seat_id', 'like', '%'.$search.'%')
                ->orwhere('contact_name', 'like', '%'.$search.'%')
                ->orwhere('contact_email', 'like', '%'.$search.'%')
                ->orwhere('contact_phone', 'like', '%'.$search.'%')
                ->orwhere('contact_address', 'like', '%'.$search.'%')
                ->orwhere('bill_company_name', 'like', '%'.$search.'%')
                ->orwhere('bill_tax_number', 'like', '%'.$search.'%')
                ->orwhere('bill_address', 'like', '%'.$search.'%')
                ->orwhere('bill_city', 'like', '%'.$search.'%')
                ->orwhere('bill_address_receive', 'like', '%'.$search.'%')
                ->orwhere('payment_method', 'like', '%'.$search.'%')
                ->orwhere('user_id', 'like', '%'.$search.'%');
            })
            ->leftJoin('users', 'ticket.user_id', '=', 'users.id')
            ->select('ticket.*', 'users.name as username' , 'users.role as role')
            ->orderBy('ticket.created_at', 'desc')
            ->paginate(20);

        }else if($_role == '1' || $_role == '3'){


            $tickets = DB::table('ticket')->where('status','<>', 'delete')
            
            ->where(function ($query) use ($search) {
                $query->where('contact_name', 'like', '%'.$search.'%')
                ->orwhere('seat_id', 'like', '%'.$search.'%')
                ->orwhere('contact_name', 'like', '%'.$search.'%')
                ->orwhere('contact_email', 'like', '%'.$search.'%')
                ->orwhere('contact_phone', 'like', '%'.$search.'%')
                ->orwhere('contact_address', 'like', '%'.$search.'%')
                ->orwhere('bill_company_name', 'like', '%'.$search.'%')
                ->orwhere('bill_tax_number', 'like', '%'.$search.'%')
                ->orwhere('bill_address', 'like', '%'.$search.'%')
                ->orwhere('bill_city', 'like', '%'.$search.'%')
                ->orwhere('bill_address_receive', 'like', '%'.$search.'%')
                ->orwhere('payment_method', 'like', '%'.$search.'%')
                ->orwhere('user_id', 'like', '%'.$search.'%');
            })
            ->leftJoin('users', 'ticket.user_id', '=', 'users.id')
            ->select('ticket.*', 'users.name as username' , 'users.role as role')
            ->orderBy('ticket.created_at', 'desc')
            ->paginate(20);
        }

        foreach ($tickets as $key => $ticket) {
            $passengerStr = $ticket->passenger;
            $passengerArr = explode(',', $passengerStr);

            $passengers = array();
            $adult = 0;
            $children = 0;
            $baby = 0;
            foreach ($passengerArr as $id) {
                $passenger = DB::table('passenger')->where('id', $id)->first();
                if($passenger->type == 'adult'){
                    $adult = $adult + 1;
                }
                if($passenger->type == 'children'){
                    $children = $children + 1;
                }
                if($passenger->type == 'baby'){
                    $baby = $baby + 1;
                }
            }   

            $flightStr = $ticket->flight_detail;
            $flightArr = explode(',', $flightStr);

            $type_flight = 'Một chiều';
            foreach ($flightArr as  $flight) {
                $flight = DB::table('flight')->where('id', $flight)->first();
                if($flight->type == 'back'){
                    $type_flight = 'Khứ hồi';
                }
            } 
            $tickets[$key]->number = $adult + $children + $baby . ' hành khách';
            $tickets[$key]->passengers = $passengers;
            // $tickets[$key]->flights = $flights;
            $tickets[$key]->type_flight = $type_flight;
        }

        return view('admin.ticket', ['tickets' => $tickets, 'search'=> $search, 'status' => $status] );
    }
    public function ticket_detail(Request $request, $id){
        $ticket_model = new Ticket;
        $ticket = $ticket_model->get_ticket_info($id, 'id');

        $status = array(
            'book' => 'Đã xác nhận, chờ thanh toán',
            'paid' => 'Đã thanh toán',
            'part-paid' => 'Thanh toán một phần',
            'complete' => 'Đã hoàn thành',
            'delete' => 'Đã xóa',
            'cancel' => 'Đã hủy',
            'out-date' => 'Hết hạn thanh toán',
            );
        if($ticket){
            //show agency detail
            if($ticket->user_id){
                $staff = DB::table('users')->where('id', $ticket->user_id)->first();

                $fund = DB::table('fund')->where('user_id', $ticket->user_id)->orderBy('created_at', 'desc')->get();

                $total_fund = 0;
                foreach ($fund as $key => $value) {
                    $total_fund += $value->value;
                }

                return view('admin.ticket_detail', ['ticket' => $ticket, 'status' => $status, 'staff'=> $staff, 'total_fund'=> $total_fund]);
            }

            return view('admin.ticket_detail', ['ticket' => $ticket, 'status' => $status, 'total_fund'=> 0]);
        }else{
            return view('admin.404');
        }

    }
    public function agency_register(Request $request){   
        $input = $request->input();

        $search = isset($input['s']) ? $input['s'] : '';

        $agency_registers = DB::table('agency_register')->paginate(20);

        return view('admin.agency_register', ['agency_register' => $agency_registers, 'search'=> $search]);
    }

    public function contact(Request $request){

        $input = $request->input();
        $search = isset($input['s']) ? $input['s'] : '';

        $_cuser = $this->_cuser();
        $_role = $_cuser->role;
        if($_role == '2'){
            $contacts = DB::table('contact')->where('own_id', $_cuser->id)
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%')
                ->orwhere('email', 'like', '%'.$search.'%')
                ->orwhere('memo', 'like', '%'.$search.'%')
                ->orwhere('own_id', 'like', '%'.$search.'%')
                ->orwhere('seat_id', 'like', '%'.$search.'%');
            })
            ->paginate(20);
        }else{
            $contacts = DB::table('contact')
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%')
                ->orwhere('email', 'like', '%'.$search.'%')
                ->orwhere('memo', 'like', '%'.$search.'%')
                ->orwhere('own_id', 'like', '%'.$search.'%')
                ->orwhere('seat_id', 'like', '%'.$search.'%');
            })
            ->paginate(20);

        }

        return view('admin.contact', ['contacts' => $contacts, 'search'=> $search]);
    }
    public function contact_detail(Request $request, $id){
        $contact = DB::table('contact')->where('id', $id)->first();
        $seat_id = $contact->seat_id;
        if($seat_id){
            $ticket_model = new Ticket;

            $ticket = $ticket_model->get_ticket_info($seat_id, 'seat_id');

            if($ticket && $ticket->user_id){
                $staff = DB::table('users')->where('id', $ticket->user_id)->first();
                return view('admin.contact_detail', ['contact' => $contact,'ticket' => $ticket,  'staff'=> $staff]);
            }

            return view('admin.contact_detail', ['contact' => $contact, 'ticket' => $ticket]);

        }

        return view('admin.contact_detail', ['contact' => $contact]);
    }
    public function contact_save(Request $request){

        $input = $request->input();
        $id = $input['id'];
        $email = $input['email'];
        $emails = array($email);
        Mail::send('email.reply',$input, function($message) use ($emails, $input) {
            $message->to($emails, 'Quản trị Clicktravel')->subject('Trả lời Clicktravel');
        });

        return redirect('/admin/contact');
    }
    public function change_status(Request $request){
        $input = $request->input();

        $type = $input['type'];
        $id = $input['id'];
        if($type == 'pay'){
            $amount = $input['pay_amount'];

            //get ticket
            $ticket = DB::table('ticket')->where('id', $id)->first();

            $total = $ticket->total;
            $paid = $ticket->paid ? $ticket->paid : 0;
            $paid = intval($paid);
            $total = intval($total);
            $amount = intval($amount);

            if($paid + $amount >= $total){
                $status = 'paid';
            }else{
                $status = 'part-paid';
            }

            DB::table('ticket')->where('id', $id)->update(['status' => $status, 'paid' => $paid + $amount]);
            if($ticket->user_id){

                $fund = new Fund;
                $fund->value = ($paid + $amount) * (-1) ;
                $fund->user_id = $ticket->user_id;
                $fund->type = 'Xuất vé' ;
                $fund->ticket_id =  $ticket->id;
                $fund->add_id = Auth::user()->id;
                $fund->save();
            }

            return redirect('/admin/ticket/'.$id);

        }
        if($type == 'cancel'){
            $reason = $input['reason'];

            $status = 'cancel';

            DB::table('ticket')->where('id', $id)->update(['status' => $status]);

            return redirect('/admin/ticket/'.$id);

        }
        if($type == 'delete'){

            $status = 'delete';

            DB::table('ticket')->where('id', $id)->update(['status' => $status]);

            return redirect('/admin/ticket');

        }
    }
    public function agency_detail(Request $request, $id){
        $agency_register = DB::table('agency_register')->where('id', $id)->first();
        return view('admin.agency_register_detail', ['agency_register' => $agency_register]);
    }
    public function agency_save(Request $request){
        $input = $request->input();
    }
    public function services_brand(Request $request){
        $input = $request->input();
        if(!isset($input['key']) || !isset($input['value'])) return redirect('/admin/setting?show=price');
        $brand = DB::table('brand_flight')->where('key', $input['key'])->first() ;
        if(!$brand){
            $brand = new Brand;
            $brand->key = $input['key'];
            $brand->price_service = $input['value'];
            $brand->name = $input['name'];
            $brand->image = isset($input['img']) ? $input['img'] : '' ;
            $brand->save();
        }else{
            DB::table('brand_flight')->where('key', $input['key'])->update(['price_service'=>$input['value'], 'image'=> isset($input['img']) ? $input['img'] : '' , 'name' => $input['name']]);
        }
        return redirect('/admin/setting?show=price');
    }
    public function promotion(Request $request){
        
        $input = $request->input();
        $search = isset($input['s']) ? $input['s'] : '';
        $promotions = DB::table('promotion')
            ->where(function ($query) use ($search) {
                $query->where('key', 'like', '%'.$search.'%')
                ->orwhere('price', 'like', '%'.$search.'%')
                ->orwhere('type', 'like', '%'.$search.'%')
                ->orwhere('email_used', 'like', '%'.$search.'%')
                ->orwhere('status', 'like', '%'.$search.'%');
            })
         ->paginate(20);

        return view('admin.promotion', ['promotions' => $promotions, 'search'=> $search]);
    }

    public function promotion_save(Request $request){
        
        $input = $request->input();
        $promotion_check = DB::table('promotion')->where('key', $input['key'])->first();
        if($promotion_check) 
            return Redirect('/admin/promotion?error=1&code='.$input['key']);
        $promotion = new Promotion;
        $promotion->key = $input['key'];
        $promotion->price = $input['price'];
        $promotion->type = $input['type'];
        $promotion->status = 'new';

        $promotion->save();
        return Redirect('/admin/promotion');
    }

    public function promotion_delete(Request $request){
        $input = $request->input();
        $promotion_check = DB::table('promotion')->where('key', $input['key'])->delete();
        return Redirect('/admin/promotion');
    }

    public function location(Request $request){
        return view('admin.location');
    }
    public function location_save(Request $request){
        $input = $request->input();
        $update = DB::table('place_point')->where('key', $input['key'])->update(['name'=> $input['name'], 'city' => $input['city'], 'country' => $input['country'] ]);
        echo json_encode(['success'=> true]);
    }

}
