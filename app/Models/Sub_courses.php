<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_courses extends Model
{

    use HasFactory;

    public function course()

    {
        return $this->belongsTo('App\Models\Course');
    }

}
