<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_surahs;

class QuranController extends Controller
{
    public function index()
    {
        $arabicqurans = data_surahs::find(1)->arabicqurans;
        return view('quran.data',compact('arabicqurans'));
    }


   
}
