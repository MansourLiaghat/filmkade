<?php

use App\Events\videoCreated;
use App\Http\Controllers\categoryVideoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DislikeController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\videoController;
use App\Http\Middleware\checkVerifiedEmail;
use App\Jobs\processVideo;
use App\Mail\verifyEmail;
use App\Models\User;
use App\Models\video;
use App\Notifications\videoCreated as NotificationsVideoCreated;
use App\Notifications\videoUpdate;
use App\Services\ffmpegAdapter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/' , [indexController::class , 'index'])->name('videos.index');
Route::get('/videos/create' , [videoController::class, 'create'])->middleware('verifiedEmail')->name('videos.create');
Route::post('/videos' , [videoController::class , 'store'])->name('videos.store');
Route::get('/videos/{video}' , [videoController::class , 'show'])->name('videos.show');
Route::get('/videos/{video}/edit' , [VideoController::class , 'edit'])->name('videos.edit');
Route::post('/videos/{video}', [VideoController::class, 'update'])->name('videos.update');
Route::get('/categories/{category:slug}/videos', [categoryVideoController::class, 'index'])->name('categories.videos.index');
Route::post('/videos/{video}/comments' , [CommentController::class , 'store'])->name('comments.store');
Route::get('{likeable_type}/{likeable_id}/like' , [LikeController::class , 'store'])->name('likes.store');
Route::get('{likeable_type}/{likeable_id}/dislike' , [DislikeController::class , 'store'])->name('dislikes.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/email' , function(){
    $user = User::first();
   return new verifyEmail($user);
});


// Route::get('/verify/{id}' , function(){
//     dd(request()->hasValidSignature());
// })->name('verify');

// Route::get('/generate' , function(){
//     echo URL::temporarySignedRoute('verify' , now()->addsecond(20) , ["id" => 5]);
// });


Route::get('/jobs' , function(){
    processVideo::dispatch();
});

Route::get('/event' , function(){
    $video = video::first();
    videoCreated::dispatch($video);
});

Route::get('/notify' , function(){
    $user = user::first();
   $video = video::first();
    $user->notify(new videoUpdate($video));
});


Route::get('duration' , function(){
    $path = 'dmnkpOI2Jp45Z6lkK1SlIIS5X3s002H8YvYkkY8z.mp4';
    $service = new ffmpegAdapter($path);
    dd($service->getDuration());
});
