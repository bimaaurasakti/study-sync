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
                <div class="list" data-container-status-id="1" data-container-status="new">
                    <div class="d-flex justify-content-end mb-4">
                        <button type="button" class="btn create-task placeholder py-2 px-3">x</button>
                    </div>
                    <div class="card mb-4">
                        <h5 class="card-header fw-bold text-center py-4">New</h5>
                    </div>
                    <div class="draggingContainer">
                        @foreach ($newTasks as $newTask)
                            <div class="drag-card" draggable="true">
                                <x-cards.task :task="$newTask" boardStatus="new" />
                            </div>
                        @endforeach
                    </div>
                </div>
            
                <div class="list" data-container-status-id="2" data-container-status="inprogress">
                    <div class="d-flex justify-content-end mb-4">
                        <div type="button" class="btn create-task placeholder py-2 px-3">x</div>
                    </div>
                    <div class="card mb-4">
                        <h5 class="card-header fw-bold text-center py-4">Inprogress</h5>
                    </div>
                    <div class="draggingContainer">
                        @foreach ($inprogressTasks as $inprogressTask)
                            <div class="drag-card" draggable="true">
                                <x-cards.task :task="$inprogressTask" boardStatus="inprogress" />
                            </div>
                        @endforeach
                    </div>
                </div>
            
                <div class="list" data-container-status-id="3" data-container-status="done">
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
                        @foreach ($doneTasks as $doneTask)
                            <div class="drag-card" draggable="true">
                                <x-cards.task :task="$doneTask" boardStatus="done" />
                            </div>
                        @endforeach
                    </div>
                </div>

                <form id="updateTaskStatus" action="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="activityStatusId" name="activity_status_id">
                </form>
            </div>

            <!-- Modals -->
            @include('components.modals.create-task')
            @if (auth()->user()->roleName == 'admin')
                @include('components.modals.editable-detail-task')
                @include('components.modals.delete-task-alert')
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
