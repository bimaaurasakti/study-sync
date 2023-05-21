<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Activity;
use App\Models\Subject;
use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $inprogressTasks = Task::with(['activities'])->whereHas('activities', function($query) {
            $query->where('user_id', auth()->user()->id)->where('activity_status_id', 2);
        })->get();
        $doneTasks = Task::with(['activities'])->whereHas('activities', function($query) {
            $query->where('user_id', auth()->user()->id)->where('activity_status_id', 3);
        })->get();

        $inprogressTaskList = $inprogressTasks->pluck('id')->toArray();
        $doneTaskList = $doneTasks->pluck('id')->toArray();
        $notANewTasks = array_merge($inprogressTaskList, $doneTaskList);
        $newTasks = Task::with(['activities'])->get()->whereNotIn('id', $notANewTasks);
        $subjects = Subject::get(); 

        return view('home', compact('subjects', 'newTasks', 'inprogressTasks', 'doneTasks'));
    }
}
