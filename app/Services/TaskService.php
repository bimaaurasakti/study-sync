<?php

namespace App\Services;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskService
{
    public function store(TaskRequest $request){
        Task::create([
            'subject_id' => $request->subject,
            'due_date' => $request->due_date,
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }
}