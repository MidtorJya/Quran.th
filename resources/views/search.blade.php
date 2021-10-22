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
             <h4>Search </h4><hr>
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
             <br>
             <br>
             <hr>
             <br>
             @if(isset($countries))

               <table class="table table-hover">
                   <thead>
                       <tr>
                          <th>ซูเราะห์ที่</th>
                           <th>ซูเราะห์</th>
                           <th>อัลกุรอาน</th>
                           <th>คำแปล</th>
                           <th>อายะห์ที่</th>
                       
                       </tr>
                   </thead>
                   <tbody>
                       
                       @if(count($countries) > 0)
                           @foreach($countries as $countrie)
                              <tr>
                              <td>{{ $countrie->id}}</td>
                                  <td>{{ $countrie->th_name }}</td>
                              
                                  <td>{{ $countrie->text }}</td>
                                  <td>{{ $countrie->Text }}</td>
                                  <td>{{ $countrie->arabic_id}}</td>
                              </tr>
                           @endforeach
                       @else

                          <tr><td>No result found!</td></tr>
                       @endif
                   </tbody>
               </table>

               <div class="pagination-block">
                   <?php //{{ $countries->links('layouts.paginationlinks') }} ?>
                   {{  $countries->links()}} 
               </div>

             @endif
          </div>
       </div>
    </div>
</body>
</html>