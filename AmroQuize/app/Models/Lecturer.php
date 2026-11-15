<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lecturer extends Model
{
    //
    protected $fillable = [
        'user_id',
        'employee_number',
        'department',
        'office_room',
        'photo'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function course(): HasMany{
        return $this->hasMany(Course::class);
    }
}
