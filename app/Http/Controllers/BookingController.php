<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mail;
use App\Passenger;
use App\Ticket;
use App\Flight;
use App\Bill;
use App\Contact;
use App\Place;
use App\Config as Config;
use Config as MainConfig;
use GuzzleHttp\Client;
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
    public function test(){
        $ticket_model = new Ticket;
        $ticket_data = $ticket_model->get_ticket_info(21, 'id');
        $admin_mail = DB::table('config')->where('key_config', 'email_admin')->first()->value;
        $emails = array($admin_mail);
        return view('email.flight_info',['ticket' => $ticket_data]);
        // Mail::send('email.flight_info',['ticket' => $ticket_data], function($message) use ($emails) {
        //     $message->to($emails, 'Quản trị Clicktravel')->subject('Thông tin chuyến bay');
        // });
        // ini_set('max_execution_time', 6000);

        // $path = storage_path() . "/airports.json"; // ie: /var/www/laravel/app/storage/json/filename.json

        // $arr = json_decode(file_get_contents($path), true); 

    // foreach ($arr as $key => $value) {

    //     echo $this->GetBetween('(', ')', $value);

    //     $place              = new Place;
    //     $place->key  = $this->GetBetween('(', ')', $value);
    //     $place->value   = $value;

    //     $id = $place->save();

    //     var_dump($value);
    // }
    }
    // public function GetBetween($var1="",$var2="",$pool){
    //     $temp1 = strpos($pool,$var1)+strlen($var1);
    //     $result = substr($pool,$temp1,strlen($pool));
    //     $dd=strpos($result,$var2);
    //     if($dd == 0){
    //         $dd = strlen($result);
    //     }

    //     return substr($result,0,$dd);
    // }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){  

        $input = array();

        $input['service_adult'] = DB::table('config')->where('key_config', 'service_adult')->first()->value;
        $input['service_children'] = DB::table('config')->where('key_config', 'service_children')->first()->value;
        $input['service_baby'] = DB::table('config')->where('key_config', 'service_baby')->first()->value;
        $input['convert'] = DB::table('config')->where('key_config', 'convert')->first()->value;

        return view('book', ['input' => $input]);
    }

    public function save(Request $request)
    {
        $input = $request->input();
        $g_username = MainConfig::get('constants.g_username');
        $g_password = MainConfig::get('constants.g_password');
        $h_user = MainConfig::get('constants.h_user');
        $h_pass = MainConfig::get('constants.h_pass');
        $h_pcc = MainConfig::get('constants.h_pcc');

        $url_book = 'http://api.galileo.vn/GalileoWS.asmx?op=Book';

        $flight = json_decode($input['flight']);

        $xml = '<?xml version="1.0" encoding="utf-8"?>
                <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                xmlns:xsd="http://www.w3.org/2001/XMLSchema"
                xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                <soap:Header>
                    <Authentication xmlns="http://tempuri.org/">
                        <HeaderUser>'.$g_username.'</HeaderUser>
                        <HeaderPassword>'.$g_password.'</HeaderPassword>
                    </Authentication>
                </soap:Header>
                <soap:Body>
                <Book xmlns="http://tempuri.org/">
                    <Username>'.$h_user.'</Username>
                    <Password>'.$h_pass.'</Password>
                    <Pcc>'.$h_pcc.'</Pcc>
                    <FareDataSelected>
                        <Adult>'.$flight->Adult.'</Adult>
                        <Child>'.$flight->Child.'</Child>
                        <Infant>'.$flight->Infant.'</Infant>
                        <TotalPax>'.$flight->TotalPax.'</TotalPax>
                        <FareAdult>'.$flight->FareAdult.'</FareAdult>
                        <FareChild>'.$flight->FareChild.'</FareChild>
                        <FareInfant>'.$flight->FareInfant.'</FareInfant>
                        <TotalFare>'.$flight->TotalFare.'</TotalFare>
                        <LastTkDt>'.$flight->LastTkDt.'</LastTkDt>
                        <FareDataId>'.$flight->FareDataId.'</FareDataId>
                        <Itinerary>'.$flight->Itinerary.'</Itinerary>
                        <CurrencyCode>'.$flight->CurrencyCode.'</CurrencyCode>
                        <PlatingCarrier>'.$flight->PlatingCarrier.'</PlatingCarrier>
                        <ListDepartureFlight>
                            <Flight>
                                <StartPoint>'.$flight->ListDepartureFlight->Flight->StartPoint.'</StartPoint>
                                <EndPoint>'.$flight->ListDepartureFlight->Flight->EndPoint.'</EndPoint>
                                <Airline>'.$flight->ListDepartureFlight->Flight->Airline.'</Airline>
                                <StartTm>'.$flight->ListDepartureFlight->Flight->StartTm.'</StartTm>
                                <EndTm>'.$flight->ListDepartureFlight->Flight->EndTm.'</EndTm>
                                <Duration xsi:nil="true" />
                                <Index>'.$flight->ListDepartureFlight->Flight->Index.'</Index>
                                <FareDataId>'.$flight->ListDepartureFlight->Flight->FareDataId.'</FareDataId>
                                <StopNum>'.$flight->ListDepartureFlight->Flight->StopNum.'</StopNum>
                                <ListAvailFlt xsi:nil="true" />
                            </Flight>
                        </ListDepartureFlight>';
            if(isset($flight->ListReturnFlight)){
                $xml .= '<ListReturnFlight>
                            <Flight>
                                <StartPoint>'.$flight->ListReturnFlight->Flight->StartPoint.'</StartPoint>
                                <EndPoint>'.$flight->ListReturnFlight->Flight->EndPoint.'</EndPoint>
                                <Airline>'.$flight->ListReturnFlight->Flight->Airline.'</Airline>
                                <StartTm>'.$flight->ListReturnFlight->Flight->StartTm.'</StartTm>
                                <EndTm>'.$flight->ListReturnFlight->Flight->EndTm.'</EndTm>
                                <Duration xsi:nil="true" />
                                <Index>'.$flight->ListReturnFlight->Flight->Index.'</Index>
                                <FareDataId>'.$flight->ListReturnFlight->Flight->FareDataId.'</FareDataId>
                                <StopNum>'.$flight->ListReturnFlight->Flight->StopNum.'</StopNum>
                                <ListAvailFlt xsi:nil="true" />
                            </Flight>
                        </ListReturnFlight>';
                        }

            $xml .= '</FareDataSelected><PassengersList>';

            if(isset($input['adult']) && !empty($input['adult'])){
                foreach ($input['adult'] as $pas) {
                    $xml .= '<Passenger>
                                <FirstName>'.$pas['first_name'].'</FirstName>
                                <LastName>'.$pas['last_name'].'</LastName>
                                <Type>ADT</Type>
                                <Gender>'.$pas['sex'].'</Gender>
                                <Birthday>01/01/'.(Date('Y') - $pas['age']).'</Birthday>
                            </Passenger>';
                }
            }
            if(isset($input['children']) && !empty($input['children'])){
                foreach ($input['children'] as $pas) {
                    $xml .= '<Passenger>
                                <FirstName>'.$pas['first_name'].'</FirstName>
                                <LastName>'.$pas['last_name'].'</LastName>
                                <Type>CHD</Type>
                                <Gender>'.$pas['sex'].'</Gender>
                                <Birthday>01/01/'.(Date('Y') - $pas['age']).'</Birthday>
                            </Passenger>';
                }
            }
            if(isset($input['baby']) && !empty($input['baby'])){
                foreach ($input['baby'] as $pas) {
                    $xml .= '<Passenger>
                                <FirstName>'.$pas['first_name'].'</FirstName>
                                <LastName>'.$pas['last_name'].'</LastName>
                                <Type>INF</Type>
                                <Gender>'.$pas['sex'].'</Gender>
                                <Birthday>'.$pas['age'].'</Birthday>
                            </Passenger>';
                }
            }

            $xml .= '</PassengersList>';

            $xml .= '<Phone>'.'0975010731'.'</Phone>';
            if(isset($flight->ListReturnFlight)){
                $xml .= '    <ReturnId>'.$flight->ReturnId.'</ReturnId>';
                }
            $xml .= '<DepartureId>'.$flight->DepartureId.'</DepartureId>
                </Book>
                </soap:Body>
                </soap:Envelope>';
        $option = [
            'headers' => ['Content-Type' => 'text/xml; charset=UTF8'],
            'body' => $xml,
        ];

        $client = new Client();
        $res = $client->request('POST', $url_book, $option);
        $data =  $res->getBody()->getContents();
        //call api
        $xml = simplexml_load_string($data);
        $xml->registerXPathNamespace("soap", "http://www.w3.org/2003/05/soap-envelope");
        $res =  $xml->xpath('//soap:Body');
        $book_id = $res[0]->BookResponse->BookResult;

        $passenger_id = array();
        if(isset($input['adult']) && !empty($input['adult'])){
            foreach ($input['adult'] as $pas) {
                //save passenger
                $passenger              = new Passenger;
                $passenger->first_name  = $pas["first_name"];
                $passenger->last_name   = $pas['last_name'];
                $passenger->sex         = $pas['sex'];
                $passenger->age         = $pas['age'];
                $passenger->type        = 'ADT';

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
                $passenger->sex         = $pas['sex'];
                $passenger->age         = $pas['age'];
                $passenger->type        = 'CHD';

                $id = $passenger->save();
                $passenger_id[] = $passenger->id;
            }
        }
        if(isset($input['baby']) && !empty($input['baby'])){
            foreach ($input['baby'] as $pas) {
                //save passenger
                $passenger              = new Passenger;
                $passenger->first_name  = $pas["first_name"];
                $passenger->last_name   = $pas['last_name'];
                $passenger->sex         = $pas['sex'];
                $passenger->age         = $pas['age'];
                $passenger->type        = 'INF';

                $passenger->save();
                $passenger_id[] = $passenger->id;
            }
        }
        //save flight
        $flight_id = array();
            $flight_inner = new Flight;
            $flight_inner->start_place = $flight->ListDepartureFlight->Flight->StartPoint;
            $flight_inner->start_time = $flight->ListDepartureFlight->Flight->StartTm;
            $flight_inner->end_time = $flight->ListDepartureFlight->Flight->EndTm;
            $flight_inner->end_place = $flight->ListDepartureFlight->Flight->EndPoint;
            $flight_inner->type = 'first';
            $flight_inner->flight_id = $flight->ListDepartureFlight->Flight->FareDataId;
            $flight_inner->brand = $flight->ListDepartureFlight->Flight->Airline;
            $flight_inner->stop_num = $flight->ListDepartureFlight->Flight->StopNum;
            $flight_inner->currency = $flight->CurrencyCode;
            $flight_inner->turn = json_encode($flight->ListDepartureFlight->Flight->ListAvailFlt);
            $flight_inner->save();
            $flight_id[] = $flight_inner->id;
        if(isset($flight->ListReturnFlight)){
            $flight_inner = new Flight;
            $flight_inner->start_place = $flight->ListReturnFlight->Flight->StartPoint;
            $flight_inner->start_time = $flight->ListReturnFlight->Flight->StartTm;
            $flight_inner->end_time = $flight->ListReturnFlight->Flight->EndTm;
            $flight_inner->end_place = $flight->ListReturnFlight->Flight->EndPoint;
            $flight_inner->type = 'back';
            $flight_inner->flight_id = $flight->ListReturnFlight->Flight->FareDataId;
            $flight_inner->brand = $flight->ListReturnFlight->Flight->Airline;
            $flight_inner->stop_num = $flight->ListReturnFlight->Flight->StopNum;
            $flight_inner->currency = $flight->CurrencyCode;
            $flight_inner->turn = json_encode($flight->ListReturnFlight->Flight->ListAvailFlt);
            $flight_inner->save();
            $flight_id[] = $flight_inner->id;
        }
        //save ticket
        $rand = substr(md5(microtime()), 0, 5);

        $userId = Auth::id();

        $ticket = new Ticket;
        // $ticket->transition_id          = $rand;
        $ticket->seat_id                = ($book_id == [] ? $book_id : $rand);
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

        $ticket->start_place            = $flight->ListDepartureFlight->Flight->StartPoint;
        $ticket->end_place              = $flight->ListDepartureFlight->Flight->EndPoint;
        $ticket->mode                   = $flight->Itinerary;

        $ticket->count_adult            = $flight->Adult;
        $ticket->count_children         = $flight->Child;
        $ticket->count_baby             = $flight->Infant;

        $convert                        = DB::table('config')->where('key_config', 'convert')->first()->value;
        $ticket->price_adult            = $flight->FareAdult*$convert;
        $ticket->price_children         = $flight->FareChild*$convert;
        $ticket->price_baby             = $flight->FareInfant*$convert;

        $service_adult                  = DB::table('config')->where('key_config', 'service_adult')->first()->value;
        $service_children               = DB::table('config')->where('key_config', 'service_children')->first()->value;
        $service_baby                   = DB::table('config')->where('key_config', 'service_baby')->first()->value;

        $ticket->service_baby           = $service_baby ? $service_baby*$convert : 0; 
        $ticket->service_children       = $service_children ? $service_children*$convert : 0; 
        $ticket->service_adult          = $service_adult ? $service_adult*$convert : 0; 
        $ticket->convert                = $convert ? $convert : 0; 

        $ticket->price_all              = $flight->TotalFare*$convert;
        $ticket->gift                   = 0*$convert;
        $ticket->total                  = $ticket->price_all*1 + $ticket->gift*1 + $ticket->service_adult*1 + $ticket->service_children*1 + $ticket->service_baby*1 ;

        $ticket->currency               = $flight->CurrencyCode;


        $ticket->save();
        $param = base64_encode('ticket_id='.$ticket->id);

        $admin_mail = DB::table('config')->where('key_config', 'email_admin')->first()->value;
        $emails = array($admin_mail, $input['contact_email']);
        // send mail
        $ticket_model = new Ticket;
        $ticket_data = $ticket_model->get_ticket_info($ticket->id, 'id');
        Mail::send('email.flight_info',['ticket' => $ticket_data], function($message) use ($emails) {
            $message->to($emails, 'Quản trị Clicktravel')->subject('Thông tin chuyến bay');
        });
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
            $tmp = DB::table('flight')->where('id', $value)->first();
            $tmp->turn = json_decode($tmp->turn);
            if(is_array($tmp->turn->AvailFlt)){
                $tmp->turn->AvailFlt = $tmp->turn->AvailFlt;
            }else{
                $tmp->turn->AvailFlt = array($tmp->turn->AvailFlt);
            }
            $flights[] = $tmp;
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
            if($pass->type == 'ADT'){
                $adult  = $adult + 1;
            }
            if($pass->type == 'CHD'){
                $children  = $children + 1;
            }
            if($pass->type == 'INF'){
                $baby  = $baby + 1;
            }
        }
        $passenger_total_adult = 0;
        $passenger_total_children = 0;
        $passenger_total_baby = 0;
        $passenger_total = '';
        if($adult > 0){
            $passenger_total = $adult.' người lớn ';
            $passenger_total_adult = $adult;
        }
        if($children > 0){
            $passenger_total .= $children.' trẻ em ';
            $passenger_total_children = $children;
        }
        if($baby > 0){
            $passenger_total .= $baby.' trẻ sơ sinh ';
            $passenger_total_baby = $baby;
        }

        return view('verify', [
            'data' =>  $data, 
            'flights' => $flights, 
            'passengers'=> $passengers, 
            'passenger_total_adult'=> $passenger_total_adult, 
            'passenger_total_children'=> $passenger_total_children, 
            'passenger_total_baby'=> $passenger_total_baby, 
            'passenger_total' =>  $passenger_total 
            ]);
    }

}

