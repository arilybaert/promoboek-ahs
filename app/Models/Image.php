<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'tags',
        'title',
        'url',
        'thumbnail',
<<<<<<< HEAD
        'student_id',
        'href'
    ];
=======
        'student_id'

    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
>>>>>>> d68138e3ff41c129c4c70269e92c7d79740ff457
}
