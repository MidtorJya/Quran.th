@extends('layouts.adminmanage')

@section('content')

<h class="h4 text-gray-900 mb-4">เเก้ไขวิดีโอตัฟซีร</h>
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

<form action="{{ route('tafseers.update', $tafseer->id) }}" method="post">
    @csrf
    @method('put')
    <strong>ชื่อ : </strong>
    <input type="text" name="name" class="form-control mb-3" placeholder="ชื่อ" value="{{ $tafseer->name }}"/>
    
    <strong>ลำดับซูเราะห์ : </strong>
    <input type="number" name="datasurah_id" class="form-control mb-3" placeholder="ํ" value="{{ $tafseer->datasurah_id }}"/>
    
    <strong>YoutubeId : </strong>
    <textarea class="form-control mb-3" name="youtubeId" rows="4" placeholder="ลำดับซูเราะห์">{{ $tafseer->youtubeId}}</textarea>
    <a href ="{{ route('tafseers.index') }}" class ="btn btn-success my-0"> กลับ </a>
    <button class="btn btn-primary float-end px-5" type="submit">บันทึก</button>
</form>

@endsection 