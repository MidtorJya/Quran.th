@extends('quran.navbar')
@section('content')
@foreach($datasurahs as $datasurah)
<div class="row text-center">
      <div class="col-sm">
        <button style="height: 150px; width:320px;  margin-top: 30px;

        margin-right: 10px;
        margin-left: 10px;
        margin-bottom: 10px;  "  
        type="buttom" 
        
        class="btn btn-outline-secondary">
  
        <a  href="{{ route('arabic', $datasurah) }}">{{ $datasurah->th_name}}</a>
       
</div>
</div>

@endforeach
        

    @endsection
