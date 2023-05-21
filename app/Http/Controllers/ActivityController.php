<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityRequest;
use App\Services\ActivityService;
use Illuminate\Http\Response;
use PHPUnit\Event\Code\Throwable;

class ActivityController extends Controller
{
    protected $activityService;

    public function __construct(ActivityService $activityService)
    {
        $this->activityService = $activityService;
    }

    public function createOrUpdate(ActivityRequest $request, $taskId)
    {
        try {
            $this->activityService->createOrUpdate($request, $taskId);
            return Response::statusOk('', 'Task status updated successfully.');
        } catch (Throwable $th) {
            return Response::statusError('Something when wrong.', 400);
        }
    }
}
