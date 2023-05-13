<nav class="navbar navbar-expand-sm bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="{{ route('home') }}">
            <h3 class="navbar-logo align-middle fw-bold mb-0">
                <img class="align-middle" src="{{ asset('icons/rocket.svg') }}" alt="Logo" width="16" class="d-inline-block align-text-top">
                <span class="l">Study</span><span class="r">Sync</span>
            </h3>
        </a>
        <button class="navbar-toggler menu border border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>       

        @if (auth()->guest())
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
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
            </div>
        @else
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item dropdown d-none d-sm-block">
                        <button type="button" class="btn profile rouded-circle p-0" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="circular--portrait">
                                <img src="{{ asset('images/profile.jpg') }}" />
                            </div>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end mt-3 p-1">
                            <a class="nav-link text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                    <li class="d-sm-none">
                        <a class="nav-link text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>