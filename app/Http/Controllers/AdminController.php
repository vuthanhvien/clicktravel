<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.dashboard');
    }
    public function user(){
        return view('admin.user');
    }
    public function setting(){
        return view('admin.setting');
    }
    public function notification(){
        return view('admin.notification');
    }
    public function ticket(){
        return view('admin.ticket');
    }
    public function passenger(){
        return view('admin.passenger');
    }
}
