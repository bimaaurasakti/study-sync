@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/board.css') }}">
@endsection

@section('content')
<div class="container">
    @if (auth()->guest())
        <section class="empty-board">
            <div class="d-flex flex-column justify-content-center align-items-center my-5">
                <lord-icon
                    src="https://cdn.lordicon.com/wizuwpye.json"
                    trigger="loop"
                    colors="primary:#5e60ce,secondary:#4ea8de"
                    style="width:250px;height:250px">
                </lord-icon>
                <h4 class="fw-bold">Login first to access your homework list</h4>
                <small>“Learn as if you will live forever, live like you will die tomorrow.”</small>
                <small>— Mahatma Gandhi</small>
            </div>
        </section>
    @else
        <section class="board">
            <div class="row scroll-board">
                <div class="col">
                    <div class="card text-bg-dark mb-3">
                        <div class="card-header fw-bold text-center">New</div>
                    </div>
                    <div class="card text-bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card text-bg-dark mb-3">
                        <div class="card-header fw-bold text-center">Inprogress</div>
                    </div>
                    <div class="card text-bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card text-bg-dark mb-3">
                        <div class="card-header fw-bold text-center">Done</div>
                    </div>
                    <div class="card text-bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-bg-dark mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
@endsection
