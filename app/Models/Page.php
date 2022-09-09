<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'meta',
        'content',
        'published',
    ];

    protected $casts = [
        'meta' => 'array',
        'content' => 'array',
        'published' => 'boolean',
    ];
}
