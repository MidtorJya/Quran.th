<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   
    public function detail()
    {
        return view('quran.detail');
    }
    public function homepage()
    {
        return view('quran.home');
    }
}


