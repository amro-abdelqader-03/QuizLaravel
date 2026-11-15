<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lecture extends Model
{
    //
    protected $fillable = [
        'course_id',
        'title',
        'topic_summary',
        'hall_name',
        'scheduled_at',
    ];

    public function course(): BelongsTo{
        return $this->belongsTo(Course::class);
    }

}
