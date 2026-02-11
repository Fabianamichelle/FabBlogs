<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'published_at',
        'pinned',
        'category',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'pinned' => 'boolean',
        'category' => 'string',
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

    

    // Only published posts
    public function scopePublished(Builder $query): Builder
    {
        return $query->whereNotNull('published_at');
    }

    // Filtering for Posts
    public function scopeFilter(Builder $query, array $filters): Builder
    {
        if (!empty($filters['search'])) {
            $search = $filters['search'];
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                ->orWhere('excerpt', 'like', "%{$search}%")
                ->orWhere('body', 'like', "%{$search}%");
            });

            // put better matches first
            $query->orderByRaw(
                "CASE
                    WHEN title LIKE ? Then 0
                    WHEN excerpt LIKE ? Then 1
                    Else 2
                END",
                ["%{$search}%", "%{$search}%"]
            );  
        }

        if (!empty($filters['pinned'])) {
            $query->where('pinned', true);
        }

        if (!empty($filters['category'])) {
            $query->where('category', $filters['category']); // simple string match
        }

        return $query;
    }

}