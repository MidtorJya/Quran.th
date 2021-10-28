@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
            <div class="card">
                <div class="card-header">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
      <li class="nav-item">
        <a class="nav-link" href="{{ route('adminhome') }}">จัดการกุรอาน</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('manageuser') }}">จัดการผู้ใช้</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('managetafseer') }}">จัดการตัฟซีร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login-form.html">จัดการโน้ต</a>
      </li>
   
    </ul>
</nav>
</div>

<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
</div>
<div class ="container">
  <table class="table table-hover table-bordered  ">
  
    <thead >
    <tr class="table">
        <th scope="col">ลำดับที่</th>
        <th scope="col">ชื่อ</th>
        <th scope="col">ไอดียูทูป</th>
        <th scope="col">ซูเราะห์ที่</th>
        <th scope="col">action</th>
      
     </tr> 
  
   <thead>
  <tbody>

  @foreach($tafseer as $tafseer)  
  <tr class="table ">
      <td>{{ $tafseer->index}}</td>
      <td> {{ $tafseer->name}}</a></td>
      <td>{{ $tafseer->youtubeId}}</td>
      <td>{{ $tafseer->datasurah_id}}</td>
      <td>
                      
            
                      <a href="{{ route('manageuser') }}" class="btn btn-warning">แก้ไข</a>
                      <a href="{{ route('manageuser') }}" class="btn btn-primary">ดู</a>
                      <a href="{{ route('manageuser') }}" class="btn btn-danger">ลบ</a>
                
                                 </td>
  </tr> 
  @endforeach
  </tbody> 
  </table>


</div>

@endsection
