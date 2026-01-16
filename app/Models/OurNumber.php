<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurNumber extends Model
{
    protected $fillable = [
        'project_completed',
        'happy_clients',
        'views_generated',
        'years_of_experience',
    ];
}
