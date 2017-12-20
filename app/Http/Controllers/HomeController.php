<?php

namespace App\Http\Controllers;
use App\patient;
use App\measurement;
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
        $patients=patient::all();
       // dd($patients);
        $measurements=measurement::all();
         return view('home')->with('patients',$patients)->with('measurements',$measurements);
    }
}
