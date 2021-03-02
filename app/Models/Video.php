<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'title',
        'url',
        'thumbnail',
        'thumbnail_image',
        'student_id'

    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
