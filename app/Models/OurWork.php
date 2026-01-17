<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurWork extends Model
{
    protected $fillable = ['image_url', 'category', 'client_name', 'description', 'tools_used', 'is_visible'];

    protected $casts = [
        'tools_used' => 'array', // This lets you use a multi-select tags input in Filament
        'is_visible' => 'boolean',
    ];

    // protected $appends = ['full_image_url'];

    // public function getFullImageUrlAttribute(): string
    // {
    //     // Path: storage/app/public/our_works/image.jpg
    //     return $this->image_url ? asset('storage/our-works/' . $this->image_url) : null;
    // }
}
