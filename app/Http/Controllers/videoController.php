<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeVideosRequest;
use App\Http\Requests\updateVideoRequest;
use App\Models\category;
use App\Models\video;
use App\Models\User;
use App\Services\ffmpegAdapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class videoController extends Controller
{
    public function create()
    {
        $categories = category::all();
        return view ('videos.create' , compact('categories'));
    }

    public function store(storeVideosRequest $request)
    {
        $path = Storage::putFile('', $request->file('file'));
        $ffmpegservice = new ffmpegAdapter($path);
        $request->merge([
            'path'=>$path ,
            'length'=>$ffmpegservice->getDuration()
                        ]);
        $request->user()->videos()->create($request->all());
        return redirect()->route('videos.index')->with('alert',__('messages.success.message'));
    }

    public function show(video $video)
    {
        $video->load('comments.user');
        return view('videos.Show', compact('video'));
    }

    public function edit(video $video)
    {
        $categories = Category::all();

        return view('videos.edit', compact('video', 'categories'));
    }

    public function update(updateVideoRequest  $request, Video $video)
    {
        if($request->hasfile('file')){
            $path = Storage::putFile('', $request->file('file'));
            $ffmpegservice = new ffmpegAdapter($path);
            $request->merge([
                'path'=>$path ,
                'length'=>$ffmpegService->getDuration()
                            ]);        }
       
        $video->update($request->all());
        return redirect()->route('videos.show', $video->slug)->with('alert', __('messages.success.message'));
    }
}
