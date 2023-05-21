<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityRequest;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PHPUnit\Event\Code\Throwable;

class ActivityController extends Controller
{
    public function createOrUpdateActivity(ActivityRequest $request, $taskId)
    {
        try {
            $activity = Activity::where('task_id', $taskId)->first();
            if (!$activity) {
                $activity = Activity::create([
                    'user_id' => auth()->user()->id,
                    'activity_status_id' => $request->activity_status_id,
                    'task_id' => $taskId,
                ]);
            } else {
                $activity->activity_status_id = $request->activity_status_id;
                $activity->save();  
            }   
            return Response::statusOk('', 'Task status updated successfully.');
        } catch (Throwable $th) {
            return Response::statusError('Something when wrong.', 400);
        }
    }
}
