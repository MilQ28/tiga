<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Articles extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
        'status',
        'views',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function scopePublished($query)
    {
        $articles = Articles::where('status', 'published')
            ->latest()
            ->get();
    }
}