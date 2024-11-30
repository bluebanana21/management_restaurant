<div class="col-sm-auto sticky-top" id="blue-nav">
    <div class="d-flex flex-sm-column flex-row flex-nowrap align-items-center sticky-top">
        <a href="/" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip"
            data-bs-placement="right" data-bs-original-title="Icon-only">
            <i class="bi-bootstrap fs-1"></i>
        </a>
        <ul
            class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center ">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link py-3 px-2 text-white" title="Home" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-original-title="Home">
                    <i class="fa-solid fa-house fa-lg"></i>
                </a>
            </li>
            <li>
                <a href="{{ route('get.order') }}" class="nav-link py-3 px-2 text-white" title="Orders"
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                    <i class="fa-solid fa-cart-shopping fa-lg"></i>
                </a>
            </li>
            <li>
                <a href="{{ route('get.menu') }}" class="nav-link py-3 px-2 text-white" title="Menus"
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Menus">
                    <i class="fa-solid fa-table fa-lg"></i>
                </a>
            </li>
            <li>
                <a href="{{ route('get.category') }}" class="nav-link py-3 px-2 text-white" title="Categories"
                    data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Categories">
                    <i class="fa-solid fa-list"></i>
                </a>
            </li>

        </ul>
        <div class="dropdown">
            <a href="#"
                class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle text-white"
                id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user fa-lg"></i>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                <li><a class="dropdown-item" href="{{ route('get.home') }}">Go to home</a></li>
                <li>
                    <form action="{{ route('user.Logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="fa-solid fa-right-from-bracket">
                                Logout
                            </i>
                        </button>
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>
