<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryVideoController extends Controller
{
    public function index (category $category)
    {
        $videos = $category -> videos()->paginate(24) ;
        $title = $category->name ;
        return view ('videos.index' , compact ('videos' , 'title'));
    }
}
