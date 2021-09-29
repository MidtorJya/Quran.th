<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
   
    public function detail()
    {
        return view('quran.detail');
    }
    public function homepage()
    {
        $surahs = DB::table('surahs')
        ->select('surah_name')
        ->get();

        return view('quran.home',compact('surahs'));
        //return view('quran.home');
    } 
    public function tafseer_vdo()
    {
        return view('quran.tafseer_vdo');
    }
    public function tafseer_home()
    {
        return view('quran.tafseer_home');
    }
    public function tafseer_detail()
    {
        return view('quran.tafseer_detail');
    }
    public function navbar()
    {
        return view('quran.navbar');
    }
}


