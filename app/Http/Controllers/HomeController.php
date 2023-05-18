<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Subject;
use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index()
    {
        $subjects = Subject::get();
        return view('home', compact('subjects'));
    }

    public function storeTask(TaskRequest $request)
    {
        try {
            $this->taskService->store($request);
            return redirect()->route('items.index')->with('success', 'Item created successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', 'Something when wrong.');
        }
    }
}
