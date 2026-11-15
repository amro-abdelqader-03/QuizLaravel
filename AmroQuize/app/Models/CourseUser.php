<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseUser extends Model
{
    //
    protected $table = 'course_user';

    protected $fillable = [
        'user_id',
        'course_id',
        'enrollment_date',
        'grade',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function course(): BelongsTo{
        return $this->belongsTo(Course::class);
    }

}
