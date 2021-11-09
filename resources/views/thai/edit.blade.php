@extends('layouts.adminmanageuser')

@section('content')

<h class="h4 text-gray-900 mb-4">เเก้ไขอัลกุรอาน</h>
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

<form action="{{ route('thai.update', $thai->arabic_id) }}" method="post">

    @csrf
    @method('put')
    <strong>ที่ : </strong>
    <input type="text" name="ayat" class="form-control mb-3" placeholder="อายะห์ที่" value="{{ $thai->ayat }}"/>
    <strong>รหัสผ่าน : </strong>
    <textarea class="form-control mb-3" name="Text" rows="4" placeholder="คำแปล">{{ $thai->Text}}</textarea>
    
    <strong>ที่ : </strong>
    <input type="text" name="audio" class="form-control mb-3" placeholder="เสียง" value="{{ $thai->audio }}"/>
    
    <strong>อีเมลล์ : </strong>
    <input type="text" name="datasurah_id" class="form-control mb-3" placeholder="ซูเราะห์ที่" value="{{ $thai->datasurah_id }}"/>

    <a href ="{{ route('thai.index') }}" class ="btn btn-success my-0"> กลับ </a>
    <button class="btn btn-primary float-end px-5" type="submit">บันทึก</button>
</form>

@endsection 