<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// put the basic auth routes in
Auth::routes();

Route::get('/', function () {
    $posts = Post::orderBy('published_at', 'desc')->get();

    return view('welcome', [
        'posts' => $posts,
    ]);
});

Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::post('/admin', [PostController::class, 'store'])->name('post.store')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
