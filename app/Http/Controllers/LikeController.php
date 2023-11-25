<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(video $video){
       $video->likes()->create([
        'user_id'=>auth()->id(),
        'vote'=>1 , -1
       ]);
       return back();
    }
  
}
