<?php

namespace App\Models\Traits;

use App\Models\Like;
use App\Models\User;

trait likeable
{
    public function likes()
    {
    return $this->morphmany(Like::class, 'likeable');
    }

    public function getLikesCountAttribute()
    {
        return $this->likes()
        ->where('vote' , 1)
        ->count();
    }
    
    public function getDislikesCountAttribute()
    {
        return $this->likes()
        ->where('vote' , -1)
        ->count();
    }

    public function likedBy (user $user)
    {
        return $this->likes()->create([
            'vote' => 1 ,
            'user_id' => $user->id
        ]);
    }

    public function dislikedBy (User $user)
    {
        return $this->likes()->create([
            'vote' => -1 ,
            'user_id' => $user->id
        ]);
    }
}