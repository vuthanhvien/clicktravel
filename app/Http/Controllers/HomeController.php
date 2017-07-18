<?php

namespace App\Http\Controllers;

use Mail;
use DB;
use App\Contact;
use App\RegisterAgency;
use Illuminate\Http\Request;

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
        $output = array();
        
        return view('home');
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

        Mail::send('email.agency',$input, function($message){
            $message->to('vuthanhvien742@gmail.com', 'Quản trị Clicktravel')->subject('Request agency');
        });


        $status_send = 'sent';
        return view('auth.agency', ['status_send' => $status_send]);
    }
    public function about(){
        return view('auth.agency');
    }
    public function contact(Request $request, $id=0){
        $id_en = base64_decode($id);
        $id_en = substr($id_en, strpos($id_en, "=") + 1);  
        $ticket = DB::table('ticket')->where('id', $id_en)->first();

        if(!$ticket){
            $ticket =(object)array();
            $ticket->transition_id = '';
            $ticket->status  = '';
        }

        return view('contact', ['ticket'=> $ticket]);
    }
    public function save(Request $request){
        $input = $request->input();

        //save
        $contact = new Contact;
        $contact->name = $input['last_name'];
        $contact->memo = $input['memo'];
        $contact->transition_id = $input['transition_id'];
        $contact->email = $input['email'];
        $contact->status = 'sent';
        $contact->save();

        //send mail

        Mail::send('email.contact',['name'=>$input['email'],'name'=>$input['email'],'transition_id'=>$input['transition_id'], 'memo' => $input['memo']], function($message){
            $message->to('vuthanhvien742@gmail.com', 'Quản trị Clicktravel')->subject('Clicktravel Contact mail');
        });

        $input['status']  = 'sent';
        return view('contact', ['ticket'=>(object)$input]);

    }


}
