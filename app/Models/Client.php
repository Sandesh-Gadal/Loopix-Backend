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
}
