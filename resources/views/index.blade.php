@extends('layout.main')

@section('navigation')
    <x-navbar />
@endsection

@section('content')
    <h1>Welcome to index, Depraved spawn</h1>

    <div class="">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('../../assets/images/appetizer ad proto.png') }}" class="d-block w-100"
                        alt="testing 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('../../assets/images/appetizer ad proto.png') }}" class="d-block w-100"
                        alt="testing 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('../../assets/images/appetizer ad proto.png') }}" class="d-block w-100"
                        alt="testing 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="">

        <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off">
        <label class="btn btn-primary" for="btn-check">Appetizers</label>

        <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off">
        <label class="btn btn-primary" for="btn-check">Main Course</label>

        <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off">
        <label class="btn btn-primary" for="btn-check">Drinks</label>

        <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off">
        <label class="btn btn-primary" for="btn-check">Desserts</label>
    </div>

    <div class="container my-2">

        <div class="d-flex flex-row flex-wrap justify-content-around">

            @for ($i = 0; $i < 10; $i++)
                <div class="card col-4 my-2" style="width: 20rem;">
                    <a href="{{ route('get.foodDetails') }}">

                        <img src="{{ asset('assets/images/test-burger.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body" id="no-decor-text">
                            <p class="card-text">Some quick example text to build on the card title and
                                make up the bulk of
                                the
                                card's
                                content.</p>
                        </div>

                    </a>
                </div>
            @endfor

        </div>

    </div>
@endsection
