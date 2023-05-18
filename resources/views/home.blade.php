@extends('layouts.app')

@section('custom-css')
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
                    <div class="d-flex justify-content-end mb-4">
                        <button type="button" class="btn create-task placeholder py-2 px-3">x</button>
                    </div>
                    <div class="card mb-4">
                        <h5 class="card-header fw-bold text-center py-4">New</h5>
                    </div>
                    <div class="draggingContainer">
                        <div class="drag-card" draggable="true">
                            <div class="card warning mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <small class="mb-0">
                                            <i class="bi bi-exclamation-triangle me-1 text-warning"></i>
                                            28 March
                                        </small>
                                        <div class="btn-group">
                                            <button type="button" class="btn edit p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots h5"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" data-bs-autoClose="outside">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="bi bi-pencil-square me-1"></i>
                                                        Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="bi bi-x-square me-1"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">Dentisy & Hierarchical Clustering</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the...</p>
                                    <div class="d-flex">
                                        <div class="subject pmp px-2 py-1 rounded-3">
                                            <small>Praktikum Mesin Pembelajaran</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="drag-card" draggable="true">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <small class="mb-0">1 April</small>
                                        <div class="btn-group">
                                            <button type="button" class="btn edit p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots h5"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="bi bi-pencil-square me-1"></i>
                                                        Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="bi bi-x-square me-1"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">Video Progress Pengembangan Project Akhir</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the...</p>
                                    <div class="d-flex">
                                        <div class="subject ppl px-2 py-1 rounded-3">
                                            <small>Pemodelan Perangkat Lunak</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="drag-card" draggable="true">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title 3</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="list">
                    <div class="d-flex justify-content-end mb-4">
                        <div type="button" class="btn create-task placeholder py-2 px-3">x</div>
                    </div>
                    <div class="card mb-4">
                        <h5 class="card-header fw-bold text-center py-4">Inprogress</h5>
                    </div>
                    <div class="draggingContainer">
                        <div class="drag-card" draggable="true">
                            <div class="card danger mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <small class="mb-0">
                                            <i class="bi bi-x-circle me-1 text-danger"></i>
                                            24 March
                                        </small>
                                        <div class="btn-group">
                                            <button type="button" class="btn edit p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots h5"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="bi bi-pencil-square me-1"></i>
                                                        Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="bi bi-x-square me-1"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">Implementasi Partisi Table</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the...</p>
                                    <div class="d-flex">
                                        <div class="subject dw px-2 py-1 rounded-3">
                                            <small>Data Warehouse</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="drag-card" draggable="true">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title 5</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="list">
                    <div class="d-flex justify-content-end mb-4">
                        <button type="button" class="btn btn-primary create-task py-2 px-3" data-bs-toggle="modal" data-bs-target="#createTaskModal">
                            Create New Task <i class="bi bi-plus-circle ms-1"></i>
                        </button>
                    </div>
                    <div class="card mb-4">
                        <h5 class="card-header fw-bold text-center py-4">Done</h5>
                    </div>
                    <div class="draggingContainer">
                        <div class="drag-card" draggable="true">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <small class="mb-0">27 March</small>
                                        <div class="btn-group">
                                            <button type="button" class="btn edit p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots h5"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="bi bi-pencil-square me-1"></i>
                                                        Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="bi bi-x-square me-1"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">A01 Broken Access Control</h5>
                                    <p class="card-text mb-3">Some quick example text to build on the card title and make up the...</p>
                                    <div class="d-flex">
                                        <div class="subject pkj px-2 py-1 rounded-3">
                                            <small>Praktikum Keamanan Jaringan</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modals -->
            @include('components.modals.create_task')
            @include('components.modals.detail_task')
        </section>
    @endif
</div>
@endsection

@section('custom-js')
<script src="{{ asset('js/dragger.js') }}"></script>
<script src="{{ asset('js/board.js') }}"></script>
@endsection
