<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\PostFormRequest;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index()
    {
        $posts =Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(PostFormRequest $request)
    {
        $data = $request->validated();

        $post = new Post;

        if($request->hasfile('image')){

            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('postimages',$filename);
            
            $post->image=$filename;
        }

        $post->name = $data['name'];
        $post->slug = Str::slug($data['slug']);
        $post->description = $data['description'];
        $post->yt_frame = $data['yt_frame'];
        $post->meta_title = $data['meta_title'];
        $post->meta_description = $data['meta_description'];
        $post->meta_keyword = $data['meta_keyword'];
        $post->status = $request -> status == true? '1':'0';
        $post->created_by = Auth::user()->id;
        $post->save();  
        
        return redirect('admin/posts') -> with('message','Post Added Successfuly!');
    }

    public function edit($post_id)
    {
        $post = Post::find($post_id);
        return view('admin.post.edit', compact('post'));
    }

    public function update(PostFormRequest $request, $post_id)
    {
        $data = $request->validated();

        $post = Post::find($post_id);

        if($request->hasfile('image')){

            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move('postimages',$filename);
            
            $post->image=$filename;
        }
        $post->name = $data['name'];
        $post->slug = Str::slug($data['slug']);
        $post->description = $data['description'];
        $post->yt_frame = $data['yt_frame'];
        $post->meta_title = $data['meta_title'];
        $post->meta_description = $data['meta_description'];
        $post->meta_keyword = $data['meta_keyword'];
        $post->status = $request -> status == true? '1':'0';
        $post->created_by = Auth::user()->id;
        $post->save();  
        
        return redirect('admin/posts') -> with('message','Post Updated Successfuly!');
    }

    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        $post->delete();

        return redirect('admin/posts') -> with('message','Post deleted Successfuly!');
    }
}
