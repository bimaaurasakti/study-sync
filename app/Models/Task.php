<?php

namespace App\Models;

use App\Traits\Uuid;
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

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function subject()
    {
        return $this->belongsTo(Task::class);
    }
}
