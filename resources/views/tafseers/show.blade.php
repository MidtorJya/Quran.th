@extends('layouts.adminmanage')

@section('content')
<h1 class="h4 text-gray-900 mb-4">วิดีโอตัฟซีร</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
        <!-- <h5 class="text-warning">ชื่อ</h5>
        <p >{{ $tafseer->name }}</p>

        <h5 class="text-warning">YoutubeId</h5>
        <p > {{ $tafseer->youtubeId }}</p>

        <h5 class="text-warning">ลำดับซูเราะห์</h5>
        <p >{{ $tafseer->datasurah_id }}</p> -->

        <div class ="card-text">   
        <strong>ลำดับซูเราะห์ : </strong>
        {{ $tafseer->datasurah_id }}
      </div> 
      <br>
        <div class ="card-text">   
        <strong>ชื่อ : </strong>
        {{ $tafseer->name }}
      </div>  
      <br>
      <div class ="card-text">   
        <strong>YoutubeId : </strong>
        {{ $tafseer->youtubeId }}
      </div>    
      <br>
        <a href ="{{ route('tafseers.index') }}" class ="btn btn-success my-0"> กลับ </a>
    </div>

@endsection