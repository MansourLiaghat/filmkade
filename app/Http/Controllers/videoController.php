<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeVideosRequest;
use App\Http\Requests\updateVideoRequest;
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

    public function show(video $video)
{
        return view('videos.Show' , compact('video'));
}

    public function edit(video $video)
    {
        return view('videos.edit' , compact('video'));
    }

    public function update(updateVideoRequest  $request , Video $video)
    {
        $video->update($request->all());
        return redirect()->route('videos.show' , $video->slug)->with('alert' , __('messages.success.message'));
    }
}
