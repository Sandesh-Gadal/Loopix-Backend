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
    // protected $appends = ['full_image_url'];
    // public function getFullImageUrlAttribute(): string
    // {
    //     // Path: storage/app/public/team_members/image.jpg
    //     return $this->image_url ? asset('storage/team-members/' . $this->image_url) : null;
    // }
}
