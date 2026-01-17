<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'image_url', 'feedback', 'client_name', 'client_role'
    ];
    // protected $appends = ['full_image_url'];
    // public function getFullImageUrlAttribute(): string
    // {
    //     // Path: storage/app/public/testimonials/image.jpg
    //     return $this->image_url ? asset('storage/testimonials/' . $this->image_url) : null;
    // }
}
