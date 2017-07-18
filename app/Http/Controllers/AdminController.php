<?php

namespace App\Http\Controllers;

use DB;
use Mail;
use Illuminate\Http\Request;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $data = array();

        $tickets = DB::table('ticket')->get();
        $total_ticket = count($tickets);
        $data['total_ticket'] = $total_ticket;
        $ticket_today = DB::table('ticket')->whereDate('created_at', DB::raw('CURDATE()'))->get();
        $data['ticket_today'] = $ticket_today;

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


        return view('admin.dashboard', ['data' => $data]);
    }

    public function user(Request $request){

        $input = $request->input();
        $search = isset($input['s']) ? $input['s'] : '';

        $users = DB::table('users')
        ->where('name', 'like', '%'.$search.'%')
        ->orWhere('email', 'like', '%'.$search.'%')
        ->orWhere('role', 'like', '%'.$search.'%')
        ->paginate(20);

        return view('admin.user', ['users'=> $users, 'search'=> $search]);
    }


    public function user_detail(Request $request, $id){

        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.user_detail', ['user'=> $user]);
    }


    public function setting(){
        return view('admin.setting');
    }


    // public function agency_register(){
    //     return view('admin.agency_register');
    // }


    public function ticket(Request $request){
        $input = $request->input();

        $search = isset($input['s']) ? $input['s'] : '';

        $tickets = DB::table('ticket')
        ->where('contact_name', 'like', '%'.$search.'%')
        ->orwhere('seat_id', 'like', '%'.$search.'%')
        ->orwhere('transition_id', 'like', '%'.$search.'%')
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
        ->orwhere('user_id', 'like', '%'.$search.'%')
        ->paginate(20);


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

        return view('admin.ticket', ['tickets' => $tickets, 'search'=> $search] );
    }
    public function ticket_detail(Request $request, $id){
        $ticket = DB::table('ticket')->where('id', $id)->first();

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
                $passengers[] = $passenger;
            }   

            $flightStr = $ticket->flight_detail;
            $flightArr = explode(',', $flightStr);

            $type_flight = 'Một chiều';
            $flights = array();
            foreach ($flightArr as  $flight) {
                $flight = DB::table('flight')->where('id', $flight)->first();
                if($flight->type == 'back'){
                    $type_flight = 'Khứ hồi';
                }
                $flights[] = $flight;
            } 
            $ticket->number = $adult + $children + $baby . ' hành khách';
            $ticket->passengers = $passengers;
            $ticket->flights = $flights;
            $ticket->type_flight = $type_flight;

        return view('admin.ticket_detail', ['ticket' => $ticket]);

    }
    public function agency_register(Request $request){   
        $input = $request->input();

        $search = isset($input['s']) ? $input['s'] : '';

        $agency_registers = DB::table('agency_register')

        ->paginate(20);

        return view('admin.agency_register', ['agency_register' => $agency_registers, 'search'=> $search]);
    }

    public function contact(Request $request){

        $input = $request->input();
        $search = isset($input['s']) ? $input['s'] : '';

        $contacts = DB::table('contact')
        ->paginate(20);

        return view('admin.contact', ['contacts' => $contacts, 'search'=> $search]);
    }
    public function contact_detail(Request $request, $id){

        $contact = DB::table('contact')->where('id', $id)->first();

        $transition_id = $contact->transition_id;
        if($transition_id){
            $ticket = DB::table('ticket')->where('transition_id', $transition_id)->first();
        }

        return view('admin.contact_detail', ['contact' => $contact, 'ticket' => $ticket]);
    }
    public function contact_save(Request $request){

        $input = $request->input();
        $id = $input['id'];
        $email = $input['email'];
        $emails = array($email);
        Mail::send('email.reply',$input, function($message) use ($emails, $input) {
            $message->to($emails, 'Quản trị Clicktravel')->subject('Trả lời Clicktravel');
        });


        // var_dump($input);
        return redirect('/admin/contact');
        // return view('admin.contact_detail', ['contact' => $contact, 'ticket' => $ticket]);
    }

}
