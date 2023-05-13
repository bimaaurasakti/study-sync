<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <h3 class="navbar-logo align-midle fw-bold mb-0">
                    <img src="{{ asset('icons/rocket.svg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    <span class="l">Study</span><span class="r">Sync</span>
                </h3>
              </a>
              {{-- <img src="{{ asset('images/profile.jpg') }}" class="rounded-circle" height="75"> --}}
              {{-- <img src="{{ asset('images/profile.jpg') }}" class="img-fluid rounded-circle" height="25"> --}}
            </div>
          </nav>

        <main class="py-4">
            {{-- @yield('content') --}}
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header text-center">New</div>
                        </div>

                        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header text-center">Inprogress</div>
                        </div>

                        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header text-center">Done</div>
                        </div>

                        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Dark card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
