<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourismController extends Controller
{
    public function showTourismCategories(){

        return view('tourism_category');
    }
}
