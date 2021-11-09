@extends('layouts.adminmanage')

@section('content')

<h class="h4 text-gray-900 mb-4">เพิ่มวิดีโอตัฟซีร</h>
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

<form action="{{ route('tafseers.store') }}" method="post">
    @csrf
    <input type="text" name="name" class="form-control mb-3" placeholder="ชื่อ"/>
    
    <input type="number" name="datasurah_id" class="form-control mb-3" placeholder="ลำดับซูเราะห์"/>
    
    <textarea class="form-control mb-3" name="youtubeId" rows="4" placeholder="youtubeId"></textarea>
    
    <button class="btn btn-primary float-end px-5" type="submit">บันทึก</button>
    <a href ="{{ route('tafseers.index') }}" class ="btn btn-success my-0"> กลับ </a>
</form>

@endsection