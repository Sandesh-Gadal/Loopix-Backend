<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name', 'role', 'image_url', 'description',
        'linkedin_url', 'twitter_url', 'github_url', 'display_order'
    ];

    protected $casts = [
        'display_order' => 'integer',
    ];
}
