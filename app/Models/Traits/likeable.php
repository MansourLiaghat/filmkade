<?php

namespace App\Models\Traits;

use App\Models\Like;

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
}