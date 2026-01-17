<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'logo_image_url', 'alt_description', 'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    // protected $appends = ['full_image_url'];

    // public function getFullImageUrlAttribute(): string
    // {
    //     // Path: storage/app/public/clients/image.jpg
    // return $this->logo_image_url ? asset('storage/clients/' . $this->logo_image_url) : null;
    // }
}
