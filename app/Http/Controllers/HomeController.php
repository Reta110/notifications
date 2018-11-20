<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\eventTrigger;

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

        //$data = ["name" => "Rafael", "rut" => "25936215-6"]; 
        //
        
        $user = auth()->user();
    
        event(new eventTrigger($user));

        return view('home');
    }
}
