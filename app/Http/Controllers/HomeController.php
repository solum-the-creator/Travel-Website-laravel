<?php

namespace App\Http\Controllers;

use App\Models\BasePlace;
use App\Models\PlacesLive;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /*public function __construct()
    {
        $this->middleware('auth');
    }*/



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $places = PlacesLive::orderBy('id', 'desc')->take(5)->get();
        return view('home',['places'=>$places]);
    }


}
