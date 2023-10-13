<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){

        $mostPopularVideos = video::all()->random(6);
        $mostViewdVideos = video::all()->random(6);
        
        return view('index' , compact('mostPopularVideos' , 'mostViewdVideos'));
    }
}
