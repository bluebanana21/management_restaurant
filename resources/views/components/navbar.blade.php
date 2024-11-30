<nav class="navbar" id="blue-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" id="yellow-logo">
            <i class="fa-solid fa-burger fa-2x" id="yellow-logo"></i>
            Garfield
        </a>
        <div class="d-flex gap-2">
            @if (Auth::user())
                <a href="/dashboard" class="text-decoration-none text-white"><i class="fa-solid fa-user"></i></a>
            @else
                <a href="{{ Route('get.login') }}" class="text-decoration-none text-white">Login</a>
                <a href="{{ Route('get.register') }}" class="text-decoration-none text-white">Register</a>
            @endif
        </div>

    </div>
</nav>
