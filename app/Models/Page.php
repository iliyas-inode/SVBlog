<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'image',
        'content',
        'meta',
        'published',
    ];

    protected $casts = [
        'meta' => 'array',
        'content' => 'array',
        'published' => 'boolean',
    ];
}
