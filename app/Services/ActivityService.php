<?php

namespace App\Services;

use App\Http\Requests\ActivityRequest;
use App\Models\Activity;

class ActivityService
{
    public function createOrUpdate(ActivityRequest $request, $taskId)
    {
        $activity = Activity::where('task_id', $taskId)->where('user_id', auth()->user()->id)->first();
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
    }
}