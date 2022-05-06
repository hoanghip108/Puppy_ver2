@extends('Admin.AdminMaster')
@section('Nav')
    @include('Admin.NavBar.Topnav')
@endsection
@section('LeftNav')
    @include('Admin.NavBar.LeftNav')
@endsection
@section('main')
    <div class="content-page">
        <div class="content">
            @foreach($puppy as $each)
                {{$each->Pid}}
            @endforeach
        </div>
    </div>
@endsection

