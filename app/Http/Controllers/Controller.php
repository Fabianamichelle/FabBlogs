<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    // Display a listing of posts
    public function index()
    {
        $posts = Post::whereNotNull('published_at')
                ->latest('published_at')
                ->paginate(10);

        return view('posts.index', compact('posts'));
    }

  
    public function show(Post $post)
    {
        abort_if(is_null($post->published_at), 404);

        return view('posts.show', compact('post'));
    }
}
