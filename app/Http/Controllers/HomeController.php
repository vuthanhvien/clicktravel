<?php

namespace App\Http\Controllers;

use Mail;
use DB;
use Auth;
use Config;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;
use App\Contact;
use App\User;
use App\RegisterAgency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
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
        
        return view('home', ['config'=> (object)$config]);
    }
    public function agency(){
        $content_data = DB::table('content')->get();
        $content  = array();
        foreach ($content_data as $key => $value) {
            $content[$value->key_config] = $value->value;
        }

        $status_send = '';
        return view('auth.agency', ['status_send' => $status_send, 'content' => $content]);
    }
    public function agency_save(Request $request){
        $input = $request->input();

        $agency = new RegisterAgency;
        $agency->first_name = $input['first_name'];
        $agency->last_name = $input['last_name'];
        $agency->email = $input['email'];
        $agency->phone = $input['phone'];
        $agency->address = $input['address'];
        $agency->memo = $input['memo'];
        $agency->status = 'sent';

        $agency->save();
        $admin_mail = DB::table('config')->where('key_config', 'email_admin')->first()->value;
        $emails = array($admin_mail);

        Mail::send('email.agency',$input, function($message) use ($emails){
            $message->to($emails, 'Quản trị Clicktravel')->subject('Đăng ký đại lý cấp 2');
        });


        $status_send = 'sent';
        // return view('auth.agency', ['status_send' => $status_send]);
        return Redirect('/agency?success=1');
    }
    public function about(){
        $content_data = DB::table('content')->get();
        $content  = array();
        foreach ($content_data as $key => $value) {
            $content[$value->key_config] = $value->value;
        }

        return view('about', ['content' => $content]);
    }
    public function contact(Request $request, $id=0){
        $id_en = base64_decode($id);
        $id_en = substr($id_en, strpos($id_en, "=") + 1);  
        $ticket = DB::table('ticket')->where('id', $id_en)->first();

        if(!$ticket){
            $ticket =(object)array();
            $ticket->seat_id = '';
            $ticket->status  = '';
        }
        $content_data = DB::table('content')->get();
        $content  = array();
        foreach ($content_data as $key => $value) {
            $content[$value->key_config] = $value->value;
        }
        return view('contact', ['ticket'=> $ticket, 'content' => $content]);
    }
    public function save(Request $request){
        $input = $request->input();
        //get userid from
        // $ticket = DB::table('ticket')->where('seat_id', $input['seat_id'] ? $input['seat_id'] : '')->first();
        //save
        $contact = new Contact;
        $contact->name = $input['last_name'];
        $contact->memo = $input['memo'];
        // $contact->seat_id = $input['seat_id'];
        $contact->email = $input['email'];
        // if( $ticket )$contact->own_id = $ticket->user_id;
        $contact->status = 'sent';
        $contact->save();


        //send mail
        $admin_mail = DB::table('config')->where('key_config', 'email_admin')->first()->value;
        $emails = array($admin_mail);
        Mail::send('email.contact',['name'=>$input['last_name'],'email'=>$input['email'], 'memo' => $input['memo']], function($message) use ($emails){
            $message->to($emails)->subject('Liên hệ Clicktravel');
        });

        $input['status']  = 'sent';
        return Redirect('/contact-us?success=1');

    }
    public function postAvatar(Request $request){
        try{
            if($request->hasFile('avatar')){
                $avatar = $request->file('avatar');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
            // File::exists(storage_path('/avatars/' . $filename)) or File::makeDirectory(storage_path('/avatars/' . $filename));

                Image::make($avatar)->save( public_path('\\avatars\\' . $filename ) );
                $input = $request->input();
                if($input['user_id']){
                    $user = User::find($input['user_id']);
                }else{
                    $user = Auth::user();
                }
                $user->avatar = '/avatars/' .$filename;
                $user->save();

                return Redirect::back();
            }
        }catch(Exception $e){
            return Redirect::back();

        }
    }
    public function get_point(Request $request){
        $input = $request->input();
        echo $key = $input['key'];

        $data = DB::table('place_point')->where('key', $key)->first();
        echo json_encode($data);
    }
    public function search_point(Request $request){
        $input = $request->input();
        $key = isset($input['key']) ? $input['key'] : '';
        $limit = isset($input['limit']) ? $input['limit'] : '';
        $type = isset($input['type']) ? $input['type'] : '';
        if($limit){
            $data = DB::table('place_point')->where('name', 'like', '%'.$key.'%')->limit($limit)->get();
        }else{
            $data = DB::table('place_point')->where('name', 'like', '%'.$key.'%')->get();
        }
        if($type == 'table'){
            echo json_encode(['data' => $data]);
            die();
        }
        $output = array();
        foreach ($data as $key => $value) {
            $output[$value->key] = $value;
        }
        echo json_encode($output);
    }
    public function page_404(Request $request){
        return view('404');
    }
    public function visa(Request $request){
        return view('comming_soon');
    }
    public function hotel(Request $request){
        return view('comming_soon');
    }
    public function promotion(Request $request){
        return view('comming_soon');
    }
    public function get_promotion(Request $request){
        $input = $request->input();
        $promotion_check = DB::table('promotion')->where('key', $input['key'])->first();

        $output = array();
        if($promotion_check){
            if($promotion_check->status == 'expire'){
                $output['success'] = false;
                $output['msg'] = 'Mã khuyến mãi đã hết hạn';
            }else{
                $output['success'] = true;
                $output['price'] = $promotion_check->price;
            }
        }else{
            $output['success'] = false;
            $output['msg'] = 'Mã khuyến mãi không tồn tại';
        }
        echo json_encode($output);
    }


}
