@extends('layout.adminLayout')

@section('navigation')
    <x-sidebar />
@endsection

@section('content')
    <div class="d-flex justify-content-between">

        <h1>Category</h1>
        <button class="btn btn-success">
            <a class="text-decoration-none text-white" href="{{ route('dashboard.show.addCategory') }}">
                add Category
            </a>
        </button>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">category name</th>
                <th scope="col">created by</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->created_by }}</td>
                    <td>
                        <a href="" class="badge bg-info">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <form action="{{ route('dashboard.delete.Category') }}" class="d-inline">

                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                <i class="fa-solid fa-trash"></i>

                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
