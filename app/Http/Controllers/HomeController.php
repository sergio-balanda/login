<?php

namespace log\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use log\User;
use Redirect;

class HomeController extends Controller
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
    public function index()
    {
        $tipo=Auth::user()->type;
        if($tipo != 'admin')
        {
        return view('home');
        }
        else{
           return Redirect::to('admin'); 
        }
    }
}
