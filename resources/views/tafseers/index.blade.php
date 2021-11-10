@extends('layouts.adminmanageuser')

@section('content')
<div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">จัดการวิดีโอตัฟซีร</h1>

                        </div>
<!-- <a class="btn btn-link float-end" href="{{ route('tafseers.create') }}">เพิ่มตัฟซีร</a> -->
<a href ="{{ route('tafseers.create')}}" class ="btn btn-dark my-3"> เพิ่มวิดีตัฟซีร </a>

{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">ที่</th>
            <th scope="col">ชื่อซูเราะห์</th>
            <th scope="col">YoutubeID</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($tafseers as $tafseer) {{-- Loop tafseers --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $tafseer->name }}</td>
            <td>{{ $tafseer->youtubeId }}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('tafseers.show', $tafseer->id) }}">ดู</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('tafseers.edit', $tafseer->id) }}">แก้ไข</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('tafseers.destroy', $tafseer->id) }}" method="post"> {{-- Delete --}}
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

    </tbody>
</table>
{{$tafseers->links()}}

@endsection