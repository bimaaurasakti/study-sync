<div>
    <div class="card {{ $task->cardClass }} mb-4" data-status="new" data-due-date="{{ $task->due_date }}" data-subject-id="{{ $task->subject->id ?? 0 }}" data-id="{{ $task->id }}">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <small class="card-due-date mb-0">
                    @if ($task->hoursDiffFromDueDate < 1)
                        <i class="bi bi-x-circle me-1 text-danger"></i>
                    @elseif ($task->hoursDiffFromDueDate < 96)
                        <i class="bi bi-exclamation-triangle me-1 text-warning"></i>
                    @endif
                    {{ $task->formattedDueDate }}
                </small>
                @if (auth()->user()->roleName == 'admin')
                    <div class="btn-group">
                        <button type="button" class="btn edit p-0" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots h5"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" data-bs-autoClose="outside">
                            <li>
                                <button class="dropdown-item" href="#">
                                    <i class="bi bi-pencil-square me-1"></i>
                                    Edit
                                </button>
                            </li>
                            <li>
                                <form action="{{ route('tasks.destroy', ['id' => $task->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item button-delete-task" type="submit">
                                        <i class="bi bi-x-square me-1"></i>
                                        Delete
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
            <h5 class="card-title fw-bold mb-3">{{ $task->title ?? 'Untitled' }}</h5>
            <p class="card-description mb-3">{{ $task->description }}</p>
            <div class="d-flex">
                <div class="subject {{ $task->subject->initials ?? 'none' }} px-2 py-1 rounded-3 {{ isset($task->subject) ? '' : 'd-none' }}">
                    <small class="card-subject" data-subject-initials="{{ $task->subject->initials ?? 'none' }}">{{ $task->subject->name ?? 'Subject' }}</small>
                </div>
            </div>
        </div>
    </div>
</div>