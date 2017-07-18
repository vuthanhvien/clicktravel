<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Passenger;
use App\Ticket;
use App\Flight;
use App\Bill;
use App\Contact;
use Illuminate\Http\Request;

class BookingController extends Controller
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
    public function index(Request $request)
    {   
        $input = $request->input();
        if(!isset($input['id'])){
            return redirect('/ticket');
        }
        $id = $input['id'];
        //get data từ galileo
        $ticket = array(
            'img_brand'     => 'https://www.vietnamairlines.com/~/media/Images/VNANew/Home/Logo%20Header/logo_vna-mobile.ashx',
            'start_time'    => '12:45',
            'start_date'    => '07/07/2017',
            'end_time'      => '13:45',
            'start_place'   => 'HCM',
            'end_place'     => 'Hà Nội',
            'end_date'      => '07/07/2017',
            'start_time'    => '12:45',
            'price'         => '1.253.145 ₫',
            'type'          => 'go',
            'turn'          => 1,
            'flight_time'   => '1g 12phút',
            'turn_string'   => 'Chuyến đi',
            'brand'         => 'VN airline'
            );
        $ticket2 = array(
            'img_brand'     => 'https://www.vietnamairlines.com/~/media/Images/VNANew/Home/Logo%20Header/logo_vna-mobile.ashx',
            'start_time'    => '12:45',
            'start_date'    => '07/07/2017',
            'end_time'      => '13:45',
            'start_place'   => 'HCM',
            'end_place'     => 'Hà Nội',
            'end_date'      => '07/07/2017',
            'start_time'    => '12:45',
            'price'         => '1.253.145 ₫',
            'type'          => 'go',
            'turn'          => 2,
            'flight_time'   => '1g 12phút',
            'turn_string'   => 'Khứ hồi',
            'brand'         => 'VN airline'
            );
        $ticket3 = array(
            'img_brand'     => 'https://www.vietnamairlines.com/~/media/Images/VNANew/Home/Logo%20Header/logo_vna-mobile.ashx',
            'start_time'    => '12:45',
            'start_date'    => '07/07/2017',
            'end_time'      => '13:45',
            'start_place'   => 'HCM',
            'end_place'     => 'Hà Nội',
            'end_date'      => '07/07/2017',
            'start_time'    => '12:45',
            'price'         => '1.253.145 ₫',
            'type'          => 'back',
            'turn'          => 1,
            'flight_time'   => '1g 12phút',
            'turn_string'   => 'Khứ hồi 2',
            'brand'         => 'VN airline'
            );
        $tickets = array($ticket, $ticket2, $ticket3);

        $percent_agency = 0.5;
        $passenger['adult'] = isset($input['adult']) ? $input['adult'] : 1;
        $passenger['children'] = isset($input['children']) ? $input['children'] : 0;
        $passenger['baby'] = isset($input['baby']) ? $input['baby'] : 0;
        $price['price_one'] = 2500000;
        $price['service'] = 100000* (1+ $percent_agency);
        $price['price_all'] = 2500000 * ($passenger['adult'] + $passenger['children'] + $passenger['baby']);
        $price['total'] = $price['service'] + $price['price_all'];

        $price['gift'] = 250000;

        $price['pay'] =  $price['total']  -  $price['gift'] ;


        return view('book', ['tickets' => $tickets, 'passenger' => $passenger, 'price' => $price]);
    }

    public function save(Request $request)
    {
        $input = $request->input();

        // $this->validate($request, [
        //     'flight_id' => 'required',
        //     'contact_sex' => 'required',
        //     'contact_name' => 'required',
        //     'contact_phone' => 'required',
        //     'contact_email' => 'required | email',
        //     'method' => 'required',
        //     ]);


        $percent_agency = 0.5;
        $passenger['adult'] = isset($input['adult']) ? $input['adult'] : array();
        $passenger['children'] = isset($input['children']) ? $input['children'] : array();
        $passenger['baby'] = isset($input['baby']) ? $input['baby'] : array();
        
        $price['price_one'] = 2500000;
        $price['service'] = 100000* (1+ $percent_agency);
        $price['price_all'] = 2500000 * (count($passenger['adult']) + count($passenger['children']) + count($passenger['baby']));
        $price['total'] = $price['service'] + $price['price_all'];

        $price['gift'] = 250000;

        $price['pay'] =  $price['total']  -  $price['gift'] ;

        $passenger_id = array();
        if(isset($input['adult']) && !empty($input['adult'])){
            foreach ($input['adult'] as $pas) {
                //save passenger
                $passenger              = new Passenger;
                $passenger->first_name  = $pas["first_name"];
                $passenger->last_name   = $pas['last_name'];
                $passenger->sex         = $pas['sex'];
                $passenger->type        = 'adult';

                $id = $passenger->save();
                $passenger_id[] = $passenger->id;
            }
        }
        if(isset($input['children']) && !empty($input['children'])){
            foreach ($input['children'] as $pas) {
                //save passenger
                $passenger              = new Passenger;
                $passenger->first_name  = $pas["first_name"];
                $passenger->last_name   = $pas['last_name'];
                $passenger->age         = $pas['age'];
                $passenger->type        = 'children';

                $id = $passenger->save();
                $passenger_id[] = $passenger->id;
            }
        }
        if(isset($input['baby']) && !empty($input['baby'])){
            foreach ($input['children'] as $pas) {
                //save passenger
                $passenger              = new Passenger;
                $passenger->first_name  = $pas["first_name"];
                $passenger->last_name   = $pas['last_name'];
                $passenger->age         = $pas['age'];
                $passenger->type        = 'baby';

                $passenger->save();
                $passenger_id[] = $passenger->id;
            }
        }
        //save flight
        $flight_id = array();
        if(isset($input['ticket']) && !empty($input['ticket'])){
            foreach ($input['ticket'] as $key => $ticket) {

                $flight = new Flight;
                $flight->start_place = $ticket['start_place'];
                $flight->start_time = $ticket['start_time'];
                $flight->start_date = $ticket['start_date'];
                $flight->end_time = $ticket['end_time'];
                $flight->end_date = $ticket['end_date'];
                $flight->end_place = $ticket['end_place'];
                $flight->type = $ticket['type'];
                $flight->turn = $ticket['turn'];
                $flight->flight_id = $input['flight_id'];
                $flight->brand = $ticket['brand'];

                $flight->save();
                $flight_id[] = $flight->id;
            }
        }

        //save ticket
        $rand = substr(md5(microtime()), 0, 15);
        $rand2 = substr(md5(microtime()), 0, 5);

        $userId = Auth::id();

        $ticket = new Ticket;
        $ticket->transition_id          = $rand;
        $ticket->seat_id                = $rand2;
        $ticket->user_id                = $userId;
        $ticket->flight_detail          = implode($flight_id, ',');
        $ticket->passenger              = implode($passenger_id, ',');
        $ticket->active                 = 1;
        $ticket->payment_method         = $input['method'];
        $ticket->status                 = 'book';

        $ticket->is_bill                = isset($input['is_bill']) && $input['is_bill'] == 'on' ? true : false;
        $ticket->bill_company_name      = isset($input['bill_company']) ? $input['bill_company'] : '';
        $ticket->bill_tax_number        = isset($input['bill_tax']) ? $input['bill_tax'] : '';
        $ticket->bill_address           = isset($input['bill_address']) ? $input['bill_address'] : '';
        $ticket->bill_city              = isset($input['bill_city']) ? $input['bill_city'] : '';
        $ticket->bill_address_receive   = isset($input['bill_service']) ? $input['bill_service'] : '';

        $ticket->contact_sex            = $input['contact_sex'];
        $ticket->contact_address        = $input['contact_address'];
        $ticket->contact_name           = $input['contact_name'];
        $ticket->contact_email          = $input['contact_email'];
        $ticket->contact_phone          = $input['contact_phone'];
        $ticket->ship_address           = $input['ship_address'] ? $input['ship_address']: '';

        $ticket->price_one              = $price['price_one'];
        $ticket->price_all              = $price['price_all'];
        $ticket->gift                   = $price['gift'];
        $ticket->price_service          = $price['service'];
        $ticket->total                  = $price['total'];
        $ticket->pay_all                = $price['pay'];
        $ticket->currency               = 'vnd';


        $ticket->save();
        $param = base64_encode('ticket_id='.$ticket->id);
        return redirect('/ticket/info/'.$param);
    }
    public function verify(Request $request, $id)
    {   
        $id_en = base64_decode($id);
        $id_en = substr($id_en, strpos($id_en, "=") + 1);  
        $data =array();

        $data = DB::table('ticket')->where('id',  $id_en)->first();
        $data->param = $id;
        // $data = $data[0];

        $flightStr = $data->flight_detail;
        $flightArr = explode(',', $flightStr);
        $flights = array();
        foreach ($flightArr as $key => $value) {
            $flights[] = DB::table('flight')->where('id', $value)->first();
        }

        $passengerStr = $data->passenger;
        $passengerArr = explode(',', $passengerStr);
        $passengers = array();
        $adult = 0;
        $children = 0;
        $baby = 0;
        foreach ($passengerArr as $key => $value) {
            $pass = DB::table('passenger')->where('id', $value)->first();
            $passengers[] = $pass;
            // $passenger_total = ''
            if($pass->type == 'adult'){
                $adult  = $adult + 1;
            }
            if($pass->type == 'children'){
                $children  = $children + 1;
            }
            if($pass->type == 'baby'){
                $baby  = $baby + 1;
            }
        }
        $passenger_total = '';
        if($adult > 0){
            $passenger_total = $adult.' người lớn. ';
        }
        if($children > 0){
            $passenger_total .= $children.' trẻ em. ';
        }
        if($baby > 0){
            $passenger_total .= $baby.' trẻ sơ sinh. ';
        }

        return view('verify', ['data' =>  $data, 'flights' => $flights, 'passengers'=> $passengers, 'passenger_total' =>  $passenger_total ]);
    }

}

