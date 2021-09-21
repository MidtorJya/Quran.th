<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exController extends Controller
{
    public function index(){
        return view('ex.exam');
    }
}
