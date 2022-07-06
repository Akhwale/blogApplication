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

    public function viewBlog(string $slug)
    {
        $post = Post::where('slug', $slug)->where('status','0')->first();
        if($post)
        {
            $latest_post = Post::where('meta_keyword', $post->meta_keyword)->where('status','0')->orderBy('created_at','DESC')->get()->take(5);
            return view('frontend.posts.viewPost', compact('post','latest_post'));
        }
        else
        {
            return redirect ('/');
        }
    }
}
