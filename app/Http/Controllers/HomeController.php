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
        $status_send = '';
        return view('auth.agency', ['status_send' => $status_send]);
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
        $email_send = array('vuthanhvien742@gmail.com');

        Mail::send('email.agency',$input, function($message) use ($email_send){
            $message->to($email_send, 'Quản trị Clicktravel')->subject('Đăng ký đại lý cấp 2');
        });


        $status_send = 'sent';
        return view('auth.agency', ['status_send' => $status_send]);
    }
    public function about(){
        return view('about');
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

        return view('contact', ['ticket'=> $ticket]);
    }
    public function save(Request $request){
        $input = $request->input();
        //get userid from
        $ticket = DB::table('ticket')->where('seat_id', $input['seat_id'] ? $input['seat_id'] : '')->first();
        //save
        $contact = new Contact;
        $contact->name = $input['last_name'];
        $contact->memo = $input['memo'];
        $contact->seat_id = $input['seat_id'];
        $contact->email = $input['email'];
        if( $ticket )$contact->own_id = $ticket->user_id;
        $contact->status = 'sent';
        $contact->save();


        //send mail
        $email_send = array('vuthanhvien742@gmail.com', 'vienvu@antking.com.vn');
        Mail::send('email.contact',['name'=>$input['last_name'],'email'=>$input['email'],'seat_id'=>$input['seat_id'], 'memo' => $input['memo']], function($message) use ($email_send){
            $message->to($email_send)->subject('Liên hệ Clicktravel');
        });

        $input['status']  = 'sent';
        return view('contact', ['ticket'=>(object)$input]);

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
        if($limit){
            $data = DB::table('place_point')->where('value', 'like', '%'.$key.'%')->limit($limit)->get();
        }else{
            $data = DB::table('place_point')->where('value', 'like', '%'.$key.'%')->get();
        }
        $output = array();
        foreach ($data as $key => $value) {
            $output[$value->key] = $value->value; 
        }
        echo json_encode($output);
    }


}
