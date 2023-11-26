<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request , string $likeable_type , string $likeable_id )
    {
      
        $model_name = 'App\\models\\' .ucfirst($likeable_type);
    
        $routekey = (new $model_name)->getRouteKeyName();
        $likeable = $model_name::where($routekey , $likeable_id)->first();
        
        $likeable->likes()->create([
        'user_id'=>auth()->id(),
        'vote'=>1
       ]);
       return back();
    }
  
}
