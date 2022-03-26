<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('posts.post', [
        "post"=>$post,
    ]);
});

Route::get('/categories/{category:slug}', [PostController::class, 'show'])->name('category');

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts.posts', [
        'posts'=>$author->posts
    ]);
});