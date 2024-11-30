@extends('layout.adminLayout')

@section('navigation')
    <x-sidebar />
@endsection

@section('content')
    <h1>Hello, {{Auth::User()->username}}</h1>
@endsection
