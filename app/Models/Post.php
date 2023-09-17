<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'image',
        'published_at',
        'featured',
        'user_id',
    ];

    protected $casts = [
        'published_at'  => 'datetime',
        'featured'      => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
