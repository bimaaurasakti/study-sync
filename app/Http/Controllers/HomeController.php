<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Task;

class HomeController extends Controller
{
    public function index()
    {
        $newTasks = $inprogressTasks = $doneTasks = null;
        $subjects = Subject::get(); 
        
        if (auth()->check()) {
            $inprogressTasks = Task::with(['activities'])->whereHas('activities', function($query) {
                $query->where('user_id', auth()->user()->id)->where('activity_status_id', 2);
            })->orderBy('due_date')->get();
            $doneTasks = Task::with(['activities'])->whereHas('activities', function($query) {
                $query->where('user_id', auth()->user()->id)->where('activity_status_id', 3);
            })->orderBy('due_date')->get();
    
            $inprogressTaskList = $inprogressTasks->pluck('id')->toArray();
            $doneTaskList = $doneTasks->pluck('id')->toArray();
            $notANewTasks = array_merge($inprogressTaskList, $doneTaskList);
            $newTasks = Task::with(['activities'])->orderBy('due_date')->get()->whereNotIn('id', $notANewTasks);
        }        

        return view('home', compact('subjects', 'newTasks', 'inprogressTasks', 'doneTasks'));
    }
}
