<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Sub_course extends Model
{

    use HasFactory;

    // public function course()

    // {
    //     return $this->belongsTo('App\Models\Course');
    // }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}