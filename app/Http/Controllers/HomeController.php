<?php

namespace login\Http\Controllers;

use Illuminate\Http\Request;
use login\user;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth');
       $this->middleware('auth', ['only' => ['index']]); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins=User::All();
        return view('home',compact('admins'));
    }
}
