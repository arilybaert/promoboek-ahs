<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function sub_courses(): HasMany
    {
        return $this->hasMany(Sub_course::class);
    }
}
