<nav class="navbar bg-body-tertiary py-3 position-relative">
    <div class="container-fluid px-4">
        <a class="navbar-brand me-auto" href="{{ route('home') }}">
            <h3 class="navbar-logo align-middle fw-bold mb-0">
                <img class="align-middle" src="{{ asset('icons/rocket.svg') }}" alt="Logo" width="16" class="d-inline-block align-text-top">
                <span class="l">Study</span><span class="r">Sync</span>
            </h3>
        </a>
        <button class="navbar-toggler menu border border-0 p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            @if (auth()->guest())
                <span class="navbar-toggler-icon"></span>
            @else
                <div class="circular--portrait">
                    <img src="{{ asset('images/profile.jpg') }}" />
                </div>
            @endif
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                @if (auth()->guest())
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link me-2" href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                Register
                            </a>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
</nav>