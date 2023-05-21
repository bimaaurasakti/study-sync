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
                        @foreach ($newTasks as $newTask)
                            <div class="drag-card" draggable="true">
                                <div class="card {{ $newTask->cardClass }} mb-4" data-status="new" data-due-date="{{ $newTask->due_date }}" data-subject-id="{{ $newTask->subject->id ?? 0 }}" data-id="{{ $newTask->id }}">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <small class="card-due-date mb-0">
                                                @if ($newTask->hoursDiffFromDueDate < 1)
                                                    <i class="bi bi-x-circle me-1 text-danger"></i>
                                                @elseif ($newTask->hoursDiffFromDueDate < 96)
                                                    <i class="bi bi-exclamation-triangle me-1 text-warning"></i>
                                                @endif
                                                {{ $newTask->formattedDueDate }}
                                            </small>
                                            @if (auth()->user()->roleName == 'admin')
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
                                            @endif
                                        </div>
                                        <h5 class="card-title fw-bold mb-3">{{ $newTask->title ?? 'Untitled' }}</h5>
                                        <p class="card-description mb-3">{{ $newTask->description }}</p>
                                        <div class="d-flex">
                                            <div class="subject {{ $newTask->subject->initials ?? 'none' }} px-2 py-1 rounded-3 {{ isset($newTask->subject) ? '' : 'd-none' }}">
                                                <small class="card-subject" data-subject-initials="{{ $newTask->subject->initials ?? 'none' }}">{{ $newTask->subject->name ?? 'Subject' }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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

                    </div>
                </div>
            
                <div class="list">
                    <div class="d-flex justify-content-end mb-4">
                        @if (auth()->user()->roleName == 'admin')
                            <button type="button" class="btn btn-primary create-task py-2 px-3" data-bs-toggle="modal" data-bs-target="#createTaskModal">
                                Create New Task <i class="bi bi-plus-circle ms-1"></i>
                            </button>
                        @else
                            <div type="button" class="btn create-task placeholder py-2 px-3">x</div>
                        @endif
                    </div>
                    <div class="card mb-4">
                        <h5 class="card-header fw-bold text-center py-4">Done</h5>
                    </div>
                    <div class="draggingContainer">

                    </div>
                </div>
            </div>

            <!-- Modals -->
            @include('components.modals.create-task')
            @if (auth()->user()->roleName == 'admin')
                @include('components.modals.editable-detail-task')
            @else
                @include('components.modals.detail-task')
            @endif
        </section>
    @endif
</div>
@endsection

@section('custom-js')
<script src="{{ asset('js/dragger.js') }}"></script>
<script src="{{ asset('js/board.js') }}"></script>
@endsection
