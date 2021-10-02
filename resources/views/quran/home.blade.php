@extends('quran.navbar')
@section('content')

<div class="row text-center">
        <div class="col-sm">
@foreach($surahs as $row)
        <button style="height: 150px; width:320px;  margin-top: 30px;

        margin-right: 10px;
        margin-left: 10px;
        margin-bottom: 10px;  "  
        type="buttom" class="btn btn-outline-secondary" >
  
        <a href="{{ route('detail') }}">{{ $row->th_name}}</a>
        @endforeach
</div>


        

    @endsection
