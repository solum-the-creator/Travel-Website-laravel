<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showAbout(){
        return view('about');
    }
    public function showGoals(){
        return view('goals');
    }
    public function showNature(){
        return view('nature');
    }
    public function showActivity(){
        return view('scientific_activity');
    }
}
