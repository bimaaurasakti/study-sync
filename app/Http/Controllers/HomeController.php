<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Subject;
use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newTasks = Task::orderBy('due_date')->get();
        $subjects = Subject::get();

        return view('home', compact('subjects', 'newTasks'));
    }
}
