<?php

namespace App\Models;

use App\Traits\Uuid;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory, Uuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subject_id',
        'due_date',
        'title',
        'description',
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = [
        'subject',
    ];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function getFormattedDueDateAttribute()
    {
        if (!isset($this->due_date)) {
            return null;
        }
        
        $now = Carbon::now();
        $dueDate = Carbon::parse($this->due_date);
        $diffInDays = $now->diffInDays($dueDate, false);
        $diffInHours  = $now->diffInHours($dueDate, false);
        
        if ($diffInDays > 1) {
            if ($diffInDays < 4) {
                $formattedDueDate = $diffInDays . ' more days, ' . $dueDate->format('H:i');
            } else {
                $formattedDueDate = $dueDate->format('d F, H:i');
            }
        } elseif ($diffInDays < 0) {
            if ($diffInDays > -4) {
                $formattedDueDate = abs($diffInDays) . ' days ago';
            } else {
                $formattedDueDate = $dueDate->format('d F');
            }
        } else {
            if ($diffInHours > 0) {
                $formattedDueDate = 'today, ' . $diffInHours . ' more hours';
            } else {
                $formattedDueDate = abs($diffInHours) . ' hours ago';
            }
        }

        return $formattedDueDate;
    }

    public function getHoursDiffFromDueDateAttribute()
    {
        if (!isset($this->due_date)) {
            return null;
        }

        $now = Carbon::now();
        $dueDate = Carbon::parse($this->due_date);

        return $now->diffInHours($dueDate, false);
    }

    public function getCardStatusTypeAttribute()
    {
        $now = Carbon::now();
        $dueDate = Carbon::parse($this->due_date);
        $diffInHours = $now->diffInHours($dueDate, false);

        if ($diffInHours < 1) {
            return 'danger';
        } elseif ($diffInHours < 96) {
            return 'warning';
        } else {
            return 'none';
        }
    }
}
