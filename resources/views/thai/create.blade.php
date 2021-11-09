@extends('layouts.adminmanageuser')

@section('content')

<h class="h4 text-gray-900 mb-4">เพิ่มผู้ใช้งาน</h>
<hr/>



@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('thai.store') }}" method="post">
    @csrf
    <!-- <input type="text" name="id" class="form-control mb-3" placeholder="ที่"/> -->
   
    <input type="text" name="ayat" class="form-control mb-3" placeholder="อายะห์ที่" value="{{ $thai->ayat }}"/>
  
    <textarea class="form-control mb-3" name="Text" rows="4" placeholder="คำแปล">{{ $thai->Text}}</textarea>
 
    <input type="text" name="audio" class="form-control mb-3" placeholder="เสียง" value="{{ $thai->audio }}"/>
    
 
    <input type="text" name="datasurah_id" class="form-control mb-3" placeholder="ซูเราะห์ที่" value="{{ $thai->datasurah_id }}"/>
    
    <button class="btn btn-primary float-end px-5" type="submit">บันทึก</button>
    <a href ="{{ route('thai.index') }}" class ="btn btn-success my-0"> กลับ </a>
</form>

@endsection