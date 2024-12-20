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

                        <a href="{{ url('/dashboard/category/edit/' . $category->id) }}" class="text-decoration-none">
                            <button class="badge bg-info border-0 ">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                        </a>

                        <a href="{{ url('/dashboard/category/delete/' . $category->id) }}" class="text-decoration-none">
                            <button class="badge bg-danger border-0">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </a>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
