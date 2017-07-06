<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $tickets = array(
            'total' => 125,
            'showed' => 23,
            'filter' => 'price',
            'filter-start' => '[240,1440]',
            'filter-end' => '[60,1440]',
            'filter-brand'=> [
                'vietnam-airline' => [
                    'name' => 'Vietnam Airline',
                    'check' => 'false',
                ],
                'jet-star' => [
                    'name' => 'Jet star',
                    'check' => 'true',
                ],
                'vietjet' => [
                    'name' => 'Vietjet air',
                    'check' => 'true',
                ]
                ],
            'rows' => [[
                        'img-brand'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png',
                        'start_time' => '12:45',
                        'end_time' => '13:45',
                        'start_place' => 'HCM',
                        'end_place' => 'Hà Nội',
                        'start_time' => '12:45',
                        'img-brand-back'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png',
                        'start_time-back' => '12:45',
                        'end_time-back' => '13:45',
                        'start_place-back' => 'HCM',
                        'end_place-back' => 'Hà Nội',
                        'start_time-back' => '12:45',
                        'price' => '1.253.145 ₫'
                    ],[
                        'img-brand'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png',
                        'start_time' => '12:45',
                        'end_time' => '13:45',
                        'start_place' => 'H2CM',
                        'end_place' => 'Hà 45',
                        'start_time' => '12:45',
                        'img-brand-back'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png',
                        'start_time-back' => '12:45',
                        'end_time-back' => '13:45',
                        'start_place-back' => 'HCM',
                        'end_place-back' => 'Hà N1ội',
                        'start_time-back' => '12:45',
                        'price' => '1.253.145 ₫'
                    ],[
                        'img-brand'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png',
                        'start_time' => '12:45',
                        'end_time' => '13:445',
                        'start_place' => 'HCM',
                        'end_place' => 'Hà Nội',
                        'start_time' => '12:45',
                        'img-brand-back'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png',
                        'start_time-back' => '12:45',
                        'end_time-back' => '13:45',
                        'start_place-back' => 'HCM',
                        'end_place-back' => 'Hà Nội',
                        'start_time-back' => '12:45',
                        'price' => '1.253.145 ₫'
                    ],
                ]
            );
        return view('ticket', ['input' => $input, 'tickets' => $tickets]);
    }
    public function month()
    {
        return view('month');
    }
}

