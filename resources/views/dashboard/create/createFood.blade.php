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
                        <form action="{{ Route('post.dashboard') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="inputName" class="form-label">Name</label>
                                <input type="text" class="form-control" name="nama makanan" id="inputName">

                            </div>
                            <div class="mb-3">
                                <label for="inputPrice" class="form-label">Harga</label>
                                <input type="text" class="form-control" name="price" id="inputPrice">
                            </div>

                            <div class="mb-3">
                                <label for="inputId" class="form-label">Category</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1" selected>Appetizers</option>
                                    <option value="2">Main course</option>
                                    <option value="3">Drinks</option>
                                    <option value="4">Desserts</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="inputDescription" class="form-label">Description</label>
                                <textarea type="text" class="form-control" name="description" id="inputDescription" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="formFile" name="imageFile">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
