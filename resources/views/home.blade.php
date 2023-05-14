@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/custom_theme.css') }}">
<link rel="stylesheet" href="{{ asset('css/board.css') }}">
<link rel="stylesheet" href="{{ asset('css/dragger.css') }}">
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
            <div id="drag-container">
                <div class="list">
                    <div class="card text-bg-dark mb-3">
                        <h5 class="card-header fw-bold text-center py-4">New</h5>
                    </div>
                    <div class="draggingContainer">
                        <div class="drag-card" draggable="true">
                            <div class="card text-bg-dark mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title 1</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="drag-card" draggable="true">
                            <div class="card text-bg-dark mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title 2</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="drag-card" draggable="true">
                            <div class="card text-bg-dark mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title 3</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="list">
                    <div class="card text-bg-dark mb-3">
                        <h5 class="card-header fw-bold text-center py-4">Inprogress</h5>
                    </div>
                    <div class="draggingContainer">
                        <div class="drag-card" draggable="true">
                            <div class="card text-bg-dark mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title 4</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="drag-card" draggable="true">
                            <div class="card text-bg-dark mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title 5</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="list">
                    <div class="card text-bg-dark mb-3">
                        <h5 class="card-header fw-bold text-center py-4">Done</h5>
                    </div>
                    <div class="draggingContainer">
                        <div class="drag-card" draggable="true">
                            <div class="card text-bg-dark mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title 6</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
@endsection

@section('custom-js')
<script src="{{ asset('js/dragger.js') }}"></script>
@endsection
