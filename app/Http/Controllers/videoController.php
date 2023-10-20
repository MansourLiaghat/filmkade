<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeVideosRequest;
use App\Http\Requests\updateVideoRequest;
use App\Models\category;
use App\Models\video;
use Illuminate\Http\Request;

class videoController extends Controller
{
    public function create(){
        $categories = category::all();
        return view ('videos.create' , compact('categories'));
    }

    public function store(storeVideosRequest $request){
        $request->user()->videos()->create($request->all());
        return redirect()->route('videos.index')->with('alert',__('messages.success.message'));
    }

    public function show(video $video)
{
        return view('videos.Show' , compact('video'));
}

    public function edit(video $video)
    {
        $categories = Category::all();

        return view('videos.edit' , compact('video' , 'categories'));
    }

    public function update(updateVideoRequest  $request , Video $video)
    {
        $video->update($request->all());
        return redirect()->route('videos.show' , $video->slug)->with('alert' , __('messages.success.message'));
    }
}
