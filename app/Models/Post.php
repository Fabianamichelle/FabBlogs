<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::saving(function ($post) {
            if (blank($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
