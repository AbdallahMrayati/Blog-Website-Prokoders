<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    $blogs = Blog::all();
    return view('admin.dashboard')->with('blogs', $blogs);
})->name('dashboard');

Route::resource('blogs', BlogController::class);
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');