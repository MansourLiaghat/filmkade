<?php

use App\Http\Controllers\categoryVideoController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\videoController;
use App\Mail\verifyEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
Route::get('/videos/create' , [videoController::class, 'create'])->name('videos.create');
Route::post('/videos' , [videoController::class , 'store'])->name('videos.store');
Route::get('/videos/{video}' , [videoController::class , 'show'])->name('videos.show');
Route::get('/videos/{video}/edit' , [VideoController::class , 'edit'])->name('videos.edit');
Route::post('/videos/{video}', [VideoController::class, 'update'])->name('videos.update');
Route::get('/categories/{category:slug}/videos', [categoryVideoController::class, 'index'])->name('categories.videos.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/email' , function(){
    $user = User::first();
    Mail::to('mansourliaghat@yahoo.com')->send(new verifyEmail($user));
});