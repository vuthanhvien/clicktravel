<?php

namespace App\Http\Controllers;

use DB;
use QrCode;
use App\Ticket;

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
        if(isset($input['seat_id']) && isset($input['email'])){

            $seat_id = $input['seat_id'];
            $email = $input['email'];
            $ticket_model = new Ticket;
            $ticket_data = $ticket_model->get_ticket_info(array($seat_id, $email), array('seat_id', 'contact_email'), 2);
            // $param = ;

            return view('payment', ['input'=> $input, 'ticket'=> $ticket_data]);
        }else{
            $input['seat_id'] = '';
            $input['email'] = '';
            return view('payment', ['input'=> $input]);
        }

    }
}
