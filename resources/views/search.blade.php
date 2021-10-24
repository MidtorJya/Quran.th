@extends('quran.nav')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Search with pagination</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css')}}">
    
</head>
<body>
    <div class="container">
       <div class="row">
          <div class="col-md-12" style="margin-top:40px">
             <h4> Quran Search </h4><hr>
             <form action="{{ route('web.find') }}" method="GET">
        
                <div class="form-group">
                   <label for="">ค้นหา</label>
                   <input type="text" class="form-control" name="query" placeholder="ค้นหา....." value="{{ request()->input('query') }}">
                   <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                 <button type="submit" class="btn btn-primary">ค้นหา</button>
                </div>
             </form>
           
             <hr>
             <br>
             @if(isset($texts))

               <table class="table table">
                   <thead>
                   <tr class="table-success">
        <th scope="col">ซูเราะห์ที่</th>
        <th scope="col">ชื่อซูเราะห์</th>
        <th scope="col">ภาษาอาหรับ</th>
        <th scope="col">คำแปล</th>
        <th scope="col">อายะห์ที่</th>
     </tr> 
                   </thead>
                   <tbody>
                       
                       @if(count($texts) > 0)
                           @foreach($texts as $text)
                              <tr>
                              <td>{{ $text->id}}</td>
                                  <td>{{ $text->th_name }}</td>
                              
                                  <td>{{ $text->text }}</td>
                                  <td>{{ $text->Text }}</td>
                                  <td>{{ $text->arabic_id}}</td>
                              </tr>
                           @endforeach
                       @else

                          <tr><td>No result found!</td></tr>
                       @endif
                   </tbody>
               </table>

               <div class="pagination-block">
                   <?php //{{ $texts->links('layouts.paginationlinks') }} ?>
                   {{  $texts->appends(request()->input())->links('layouts.paginationlinks') }}
               </div>

             @endif
          </div>
       </div>
    </div>
</body>
</html>
@endsection