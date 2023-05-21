<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Services\TaskService;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function store(TaskRequest $request)
    {
        try {
            $this->taskService->store($request);
            return redirect()->route('home')->with('success', 'Task created successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('home')->with('failed', 'Something when wrong.');
        }
    }

    public function update(TaskRequest $request, $id)
    {
        try {
            
            $this->taskService->update($request, $id);
            return redirect()->route('home')->with('success', 'Task updated successfully.');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->route('home')->with('failed', 'Something when wrong.');
        }
    }
}
