<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.posts', [
            "posts"=>Post::latest()->filter(request(['search']))->get(),
            "categories"=>Category::all(),
        ]);
    }

    public function show(Category $category)
    {
        return view('posts.posts', [
            "posts"=>$category->posts,
            "currentCategory"=>$category,
            "categories"=>Category::all(),
        ]);
    }

}
