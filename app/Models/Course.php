<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    // public function students()
    // {
    //     return $this->hasMany('App\Models\Student');
    //     return $this->hasMany('App\Models\Sub_courses');
    // }
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function sub_courses(): HasMany
    {
        return $this->hasMany(Sub_course::class);
    }
}
