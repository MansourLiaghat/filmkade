<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeCommentRequest;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(storeCommentRequest $request , video $video)
    {
     $video->comments()->create([
        'user_id' => Auth::user()->id,
        'body' => $request->body
     ]);
     return back()->with('alert' , __('messages.success.comment'));
    }
} 
