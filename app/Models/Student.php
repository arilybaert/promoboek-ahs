<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Course;

class Student extends Model
{
    use HasFactory;

    // public function course()

    // {
    //     return $this->belongsTo('App\Models\Course');
    //     return $this->hasMany('App\Models\Image');
    // }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function sub_course(): BelongsTo
    {
        return $this->belongsTo(Sub_course::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
