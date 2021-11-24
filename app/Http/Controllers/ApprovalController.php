<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Tafseer;
use App\Models\Qurantafseer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class ApprovalController extends Controller
{
  public function showvdotafseer(){
   $tafseers =Tafseer::all();
// {

//    if(Auth::id()){
//        $userid=Auth::user()->id;
//        $tafseers = Tafseer::where('user_id',$userid)->get();
 return view('approval.showvdotafseer',compact('tafseers'));
    }
  
  public function approvedvdotafseer($id)
  {
    $tafseers=tafseer::find($id);
    $tafseers->status='อนุมัติ';
    $tafseers->save();
    return redirect()->back();
  }

  public function cancledvdotafseer($id)
  {
    $tafseers=tafseer::find($id);
    $tafseers->status='ยกเลิก';
    $tafseers->save();
    return redirect()->back();
  }

  public function showtafseer(){
    $tafseers =Qurantafseer::all();
 // {
 
 //    if(Auth::id()){
 //        $userid=Auth::user()->id;
 //        $tafseers = Tafseer::where('user_id',$userid)->get();
  return view('approval.showtafseer',compact('tafseers'));
     }
   
   public function approvedtafseer($id)
   {
     $tafseers=Qurantafseer::find($id);
     $tafseers->status='อนุมัติ';
     $tafseers->save();
     return redirect()->back();
   }
 
   public function cancledtafseer($id)
   {
     $tafseers=Qurantafseer::find($id);
     $tafseers->status='ยกเลิก';
     $tafseers->save();
     return redirect()->back();
   }

  
  public function approvalhome()
    {
        $datasurahs = Datasurah::paginate(20);
        //return dd($datasurahs->toArray());
        return view('approval.approvalHome', [
            'datasurahs' => $datasurahs
            
        ]);
    }
    public function approvalmanagequran($id){
        

        $datas = Datasurah::all();
        $datasurah = Datasurah::with('tafseer')->find($id);
        $arabics = Datasurah::with('arabic.thais')->find($id);
         //function for ayat arabic
      return view('approval.qurandetail',compact('datas','arabics','datasurah'));
  
    }
    public function approvalmanagetafseer(){
        
        // $users = User::join('posts', 'users.id', '=', 'posts.user_id')
        // ->get(['users.*', 'posts.descrption']);
     
      $tafseer = Tafseer::with('data')->get();
    //
    //return dd($tafseer->toArray());
       // $datasurah = Datasurah::with('tafseer')->find($id);
     
         //function for ayat arabic
      return view('approval.approvalmanagetafseer',compact('tafseer'));
  
    }
    public function approvalstatus(){
        

      return view('approval.approvalstatus');
  
    }
}
