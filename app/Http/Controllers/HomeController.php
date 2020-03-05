<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



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
       
       
       $url='https://www.theregister.co.uk/software/headlines.atom';
              
        $feeds = simplexml_load_file($url);  
           
        return \View::make('home',['feeds' => $feeds]);
       
    }
}
