<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeVideosRequest;
use App\Models\video;
use Illuminate\Http\Request;

class videoController extends Controller
{
    public function create(){
        return view ('videos.create');
    }

    public function store(storeVideosRequest $request){
        video::create($request->all());
        return redirect()->route('videos.index')->with('alert',__('messages.success.message'));
    }
}
