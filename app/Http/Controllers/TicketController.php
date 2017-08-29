<?php

namespace App\Http\Controllers;

use Config;
use DB;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TicketController extends Controller
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
        if(!$input){
            $input['no_param'] = 'in';
        }else{
            $input['no_param'] = '';
        }
        $input['mode'] = isset($input['mode']) ? $input['mode'] : 'two_way';
        $input['start_place'] = isset($input['start_place']) ? $input['start_place'] : 'Hồ Chí Minh (SGN)';
        $input['end_place'] = isset($input['end_place']) ? $input['end_place'] : 'Hà Nội (HAN)';
        $input['start_date'] = isset($input['start_date']) ? $input['start_date'] : date("d/m/Y");
        $input['end_date'] = isset($input['end_date']) ? $input['end_date'] : date("d/m/Y");
        $input['number'] = isset($input['number']) ? $input['number'] : '1 Hành khách';
        $input['adult'] = isset($input['adult']) ? $input['adult'] : 1;
        $input['children'] = isset($input['children']) ? $input['children'] : 0;
        $input['baby'] = isset($input['baby']) ? $input['baby'] : 0;

        if($input['mode'] == 'two_way'){
            $input['mode_lang'] = '2 chiều';
        }else{
            $input['mode_lang'] = '1 chiều';
        }

        $input['service_adult'] = DB::table('config')->where('key_config', 'service_adult')->first()->value;
        $input['service_children'] = DB::table('config')->where('key_config', 'service_children')->first()->value;
        $input['convert'] = DB::table('config')->where('key_config', 'convert')->first()->value;
        $input['service_baby'] = DB::table('config')->where('key_config', 'service_baby')->first()->value;

        $input['current_url'] = http_build_query($input);
        $brand = DB::table('brand_flight')->get() ;
        return view('ticket', ['input' => $input, 'brand' => $brand]);
    }
    public function month(Request $request)
    {   
        $input = $request->input();
        $input['mode'] = isset($input['mode']) ? $input['mode'] : 'two_way';
        $input['start_place'] = isset($input['start_place']) ? $input['start_place'] : 'Hồ Chí Minh';
        $input['end_place'] = isset($input['end_place']) ? $input['end_place'] : 'Hà Nội';
        $input['start_date'] = isset($input['start_date']) ? $input['start_date'] : '12/12/2017';
        $input['end_date'] = isset($input['end_date']) ? $input['end_date'] : '12/12/2017';
        $input['number'] = isset($input['number']) ? $input['number'] : '1 Hành khách';
        $input['adult'] = isset($input['adult']) ? $input['adult'] : 1;
        $input['children'] = isset($input['children']) ? $input['children'] : 0;
        $input['baby'] = isset($input['baby']) ? $input['baby'] : 0;

        if($input['mode'] == 'two_way'){
            $input['mode_lang'] = '2 chiều';
        }else{
            $input['mode_lang'] = '1 chiều';
        }

        $input['current_url'] = http_build_query($input);
        return view('month', ['input' => $input]);
    }
    public function redirect(Request $request){
        $input = $request->input();
        var_dump($input);
    }
    public function search(Request $request){

        $input = $request->input();

        $g_username = Config::get('constants.g_username');
        $g_password = Config::get('constants.g_password');
        $h_user = Config::get('constants.h_user');
        $h_pass = Config::get('constants.h_pass');
        $h_pcc = Config::get('constants.h_pcc');


        $url_search = 'http://api.galileo.vn/GalileoWS.asmx?op=Search';
        $XML = '<?xml version="1.0" encoding="utf-8"?>
                <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                  <soap:Header>
                    <Authentication xmlns="http://tempuri.org/">
                      <HeaderUser>'.$g_username.'</HeaderUser>
                      <HeaderPassword>'.$g_password.'</HeaderPassword>
                    </Authentication>
                  </soap:Header>
                  <soap:Body>
                    <Search xmlns="http://tempuri.org/">
                      <Username>'.$h_user.'</Username>
                      <Password>'.$h_pass.'</Password>
                      <Pcc>'.$h_pcc.'</Pcc>
                      <Itinerary>'.$input['mode'].'</Itinerary>
                      <StartPoint>'.$input['start_place'].'</StartPoint>
                      <EndPoint>'.$input['end_place'].'</EndPoint>
                      <DepartDate>'.$input['start_date'].'</DepartDate>
                      <ReturnDate>'.$input['end_date'].'</ReturnDate>
                      <Adt>'.$input['adult'].'</Adt>
                      <Chd>'.$input['children'].'</Chd>
                      <Inf>'.$input['baby'].'</Inf>
                    </Search>
                  </soap:Body>
                </soap:Envelope>';
        $option = [
            'headers' => ['Content-Type' => 'text/xml; charset=UTF8'],
            'body' => $XML,
        ];
        $client = new Client();
        $res = $client->request('POST', $url_search, $option);
        $data =  $res->getBody()->getContents();
        //call api
        $xml = simplexml_load_string($data);
        $xml->registerXPathNamespace("soap", "http://www.w3.org/2003/05/soap-envelope");
        $res =  $xml->xpath('//soap:Body');
        $data = $res[0]->SearchResponse->SearchResult[0];

        $output = array(
            'data' => (array)$data,
            'type' => 'quocte',
            
            );
        return response()->json($output);

    }
}

