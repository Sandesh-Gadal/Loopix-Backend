<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'image_url', 'feedback', 'client_name', 'client_role'
    ];
}
