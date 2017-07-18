<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;

class UserController  extends Controller
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
        $user = Auth::user();
        return view('user.account', ['user'=> $user['attributes']]);
    }
    public function ticket(Request $request)
    {   
        $user_id = Auth::id();
        $tickets = DB::table('ticket')->where('user_id',  $user_id)->get();
        // $tickets = [];
        return view('user.ticket', ['tickets' => $tickets]);
    }

}

