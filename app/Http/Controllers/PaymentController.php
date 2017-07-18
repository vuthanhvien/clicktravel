<?php

namespace App\Http\Controllers;

use DB;
use QrCode;

// use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;



use Illuminate\Http\Request;

class PaymentController extends Controller
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
    public function index(Request $request){
        // $a  = QrCode::size(100)->generate(Request::url());
        $qrcode = "";
        $input = $request->input();
        if(isset($input['transition_id']) && isset($input['email'])){

            $transition_id = $input['transition_id'];
            $email = $input['email'];
            $tickets = DB::table('ticket')->where('transition_id', $transition_id)->where('contact_email', $email)->get();
            foreach ($tickets as $key => $value) {
                $tickets[$key]->payment_url = '/ticket/info/'.base64_encode('ticket_id='.$value->id);
            }
            // $param = ;

            return view('payment', ['input'=> $input, 'tickets'=> $tickets]);
        }else{
            $input['transition_id'] = '';
            $input['email'] = '';
            return view('payment', ['input'=> $input]);
        }

    }
}
