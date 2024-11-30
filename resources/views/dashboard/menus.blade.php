@extends('layout.adminLayout')

@section('navigation')
    <x-sidebar />
@endsection

@section('content')
    <div class="d-flex justify-content-between">

        <h1>Menus</h1>
        <button class="btn btn-success">
            <a class="text-decoration-none text-white" href="{{ route('dashboard.addFood') }}">
                Add Food
            </a>
        </button>
    </div>
@endsection
