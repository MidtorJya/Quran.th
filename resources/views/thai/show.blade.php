@extends('layouts.adminmanageuser')

@section('content')
<h1 class="h4 text-gray-900 mb-4">ข้อมูลผู้ใช้งาน</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
    <div class ="card-text">   
        <strong>ที่ : </strong>
        {{ $thai->ayat }}
      </div> 
      <br>
        <div class ="card-text">   
        <strong>ชื่อ : </strong>
        {{ $thai->Text }}
      </div> 
      <br>
      <div class ="card-text">   
        <strong>ดีกรี : </strong>
        {{ $thai->audio }}
      </div> 
      <br>
        <div class ="card-text">   
        <strong>อีเมลล์ : </strong>
        {{ $thai->arabic_id }}
      </div>  
      <br>
     
        <a href ="{{ route('thai.index') }}" class ="btn btn-success my-0"> กลับ </a>
    </div>

@endsection