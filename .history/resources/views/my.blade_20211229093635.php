@extends('extends.lidar')
@extends('extends.navbar')

@section('title',' Me')

@section('hello')
    <div class="container">
        <h2>Welcome my frind</h2>
    </div>

@endsection

@section('sidebar')
            This is Sidebar from master page <br>
    @parent
@endsection
