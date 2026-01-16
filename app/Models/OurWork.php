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
}
