@extends('notes.layout')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->


<div class="row mt-2">
    <div class ="col-md-12">
    <center>
      <h2>โน้ตของคุณ</h2>
</center>
          <!-- <a href ="{{ route('notes.create')}}" class ="btn btn-dark my-3"> สร้างโน้ตใหม่ </a> -->
          <a href ="{{ route('homeuser')}}" class ="btn btn-dark my-3"> Quran.th </a>
    </div>      
</div> 
<!-- 
@if($message = Session::get('success'))
    <div class ="alert alert-success">
        {{$message}}
</div>

@endif -->

<table class="table table-bordered">

 <tr>
    <th>ที่</th>
    <th>หัวข้อ</th>
    <th>คำอธิบาย</th>
    <th width="280px">Action</th>
 </tr>

 @foreach ($data as $key => $value)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $value->title }}</td>
        <td>{{ Str::limit($value->description, 100) }}</td>
        <td>
         <!-- <form action="{{ route('notes.destroy', $value->id) }}" method="post">
             <a href="{{ route('notes.show', $value->id) }}" class="btn btn-primary">ดู</a>
             <a href="{{ route('notes.edit', $value->id) }}" class="btn btn-secondary">แก้ไข</a>
             @csrf
             @method('DELETE')
             <button type="บันทึก" class ="btn btn-danger">ลบ</button> 
</form>  -->
        


          <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('notes.show', $value->id) }}">ดู</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('notes.edit', $value->id) }}">แก้ไข</a></li> {{-- Edit --}}
                        
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('notes.destroy', $value->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                              
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>


        </td>
    </tr>    
 @endforeach

</table>   

{!! $data->links() !!}

@endsection