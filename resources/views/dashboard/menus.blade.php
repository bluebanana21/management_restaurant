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

    <div class="container my-2">

        <div class="d-flex flex-row flex-wrap justify-content-around">

            @foreach ($menus as $menu)
                <div class="card col-4 my-2" style="width: 20rem;">

                    <img src="{{ asset($menu->imageFile) }}" class="card-img-top" alt="...">

                    <div class="card-body" id="no-decor-text">
                        <h2>{{ $menu->name }}</h2>
                        <p class="card-text">{{ $menu->price }}</p>
                    </div>

                    <div class="d-flex justify-content-end gap-2 m-2">

                        <a href="{{ route('get.foodDetails') }}">
                            <button class="badge bg-info border-0">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </a>
                        <a href="{{ url('/dashboard/menu/edit/' . $menu->id) }}">
                            <button class="badge bg-warning border-0">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                        </a>
                        <a href="{{ url('/dashboard/menu/delete/' . $menu->id) }}">
                            <button class="badge bg-danger border-0">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </a>

                    </div>

                </div>
            @endforeach

        </div>
    @endsection
