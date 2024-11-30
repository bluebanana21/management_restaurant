@extends('layout.main')

@section('navigation')
    <x-navbar />
@endsection

@section('content')
    <div class="container">
        <div class="d-flex flex-row">
            <div class="image">

                <img src="{{ asset('assets/images/test-burger.jpg') }}" alt="">
            </div>
            <div class="text">
                <h4>Name</h4>
                <h4>price</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tempus sapien sed interdum finibus. Nam
                    euismod sem at tristique luctus. Praesent nec nulla ac diam congue tristique ac id metus. Vestibulum
                    pulvinar interdum urna non facilisis. Fusce vel orci urna. In vel tortor ut massa dignissim posuere vel
                    ac urna. Curabitur eleifend, magna sed dignissim dapibus, nulla magna malesuada tellus, tincidunt
                    dapibus turpis tellus non risus. Vivamus scelerisque quis libero vulputate varius. Nunc ac urna sed
                    magna tempus porta. Quisque dignissim faucibus commodo. Phasellus eu eleifend purus, et ultricies justo.
                    Vestibulum pellentesque eget mauris eget vestibulum. Sed at mi libero. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.</p>
                <button type="submit" class="btn btn-success">Add to cart</button>
            </div>
        </div>

        <div class="more">
            <h3>More like this</h3>
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
        </div>

    </div>
@endsection
