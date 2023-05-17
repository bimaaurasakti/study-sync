@extends('layouts.app')

@section('content')

<!-- Section: Design Block -->
<div class="container px-3 py-1 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Ace Your Assignments<br />
          <span style="color: #4EA8DE">with StudySync!</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        Are you tired of the overwhelming chaos that often accompanies homework assignments? 
        Look no further than StudySync, the ultimate homework list app designed to revolutionize your academic journey. 
        Say goodbye to disarray and welcome a seamless and efficient approach to managing your assignments.
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                <label class="form-label" for="email">{{ __('Email Address') }}</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <label class="form-label" for="password">{{ __('Password') }}</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <!-- Submit button -->
              <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary btn-block mb-3">
              {{ __('Login') }}
              </button>
              @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
            @endif
            </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Section: Design Block -->
@endsection
