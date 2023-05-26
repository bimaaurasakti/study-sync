<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory, Uuid;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'activity_status_id',
        'task_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->hasOne(ActivityStatus::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
