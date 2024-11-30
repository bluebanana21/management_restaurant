<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-7 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">

                        <form action="{{ Route('dashboard.post.addCategory') }}" method="POST">
                            @csrf

                            <div class="mb-3">

                                <label for="inputCategoryName" class="form-label">Category name</label>
                                <input type="text" class="form-control" name="category_name" id="category_name">

                                @error('category_name')
                                    <span class="text-danger">Fill in category</span>
                                @enderror

                                {{-- <label for="inputCategoryName" class="form-label">Category name</label> --}}
                                <input type="text" class="visually-hidden" name="created_by" id="created_by"
                                    value="{{ Auth::User()->username }}">


                            </div>



                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<script>
    // const category_name = document.querySelector('#category_name');
    // const slug = document.querySelector('#slug');

    // category_name.addEventListener('')
</script>

</html>
