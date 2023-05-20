<?php

namespace App\Services;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Carbon\Carbon;

class TaskService
{
    public function store(TaskRequest $request)
    {
        Task::create([
            'subject_id' => $request->subject,
            'due_date' => $request->due_date,
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }

    public function update(TaskRequest $request)
    {
        $item = Task::find($request->id);
        $item->subject_id = $request->subject_id;
        $item->due_date = Carbon::parse($request->due_date);
        $item->title = $request->title;
        $item->description = $request->description;
        $item->save();
    }
}