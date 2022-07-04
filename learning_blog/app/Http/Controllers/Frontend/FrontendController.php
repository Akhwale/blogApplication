<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function viewBlogs()
    {
        $posts = Post::all();
        return view('frontend.posts.index', compact('posts'));
    }
}
