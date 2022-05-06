@extends('Admin.AdminMaster')
@section('Nav')
    @include('Admin.NavBar.Topnav')
@endsection @section('LeftNav')
    @include('Admin.NavBar.LeftNav')
@endsection
@section('main')
    @include('Admin.InputField')
@endsection
