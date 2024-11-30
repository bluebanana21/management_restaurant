<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

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

                        <form action="{{ Route('post.register') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="Name" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="Name">
                            </div>
                            <div class="mb-3">
                                <label for="Password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="Password">
                            </div>
                            <div class="mb-3">
                                <label for="reinputPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirm"
                                    id="reinputPassword">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <br>
                            <a href="{{ Route('get.login') }}">already have an account? click here</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>