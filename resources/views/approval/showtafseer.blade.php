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
    <a class="nav-link" href="{{ route('qurantafseers.index') }}">จัดการกุรอานตัฟซีร</a>
      </li>
     
      <li class="nav-item">
      <a class="nav-link" href="{{ route('tafseers.index') }}">จัดการวิดีโอตัฟซีร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showvdotafseer') }}">ตรวจสอบสถานะวิดีโอตัฟซีร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showtafseer') }}">ตรวจสอบสถานะตัฟซีร</a>
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

<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr></tr>
        <tr>
        <th scope="col">ที่</th>
            <th scope="col">ชื่อ</th>
            <th scope="col">ตัฟซีร</th>
            <th scope="col">ที่มา</th>
            <th scope="col">สถานะ</th>
            <th scope="col">อนุมัติ</th>
            <th scope="col">ยกเลิก</th>
            <!-- <th scope="col">Action</th> -->
        </tr>
    </thead>
    <tbody>

        @foreach ($tafseers as $tafseer) {{-- Loop tafseers --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $tafseer->name }}</td>
            <td>{{ $tafseer->qurantafseer }}</td>
            <td>{{ $tafseer->resource }}</td>
            <td>{{ $tafseer->status }}</td>
            <td>
                <a class="btn btn-success"href="
                {{url('approvedtafseer',$tafseer->id)}}">อนุมัติ</a>
            </td>
            <td>
                <a class="btn btn-danger"href="
                {{url('cancledtafseer',$tafseer->id)}}">ยกเลิก</a>
            </td>
            <!-- <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
        
                        <li>
                            <form action="{{ route('tafseers.destroy', $tafseer->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td> -->
        </tr>
        @endforeach

    </tbody>
</table>

@endsection