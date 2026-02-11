<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
 


class PostController extends Controller
{
    // Display a listing of posts

public function home(Request $request)
{
    $filters = $request->only(['search', 'category', 'pinned']);

    $posts = Post::query()
        ->published()
        ->filter($filters)
        ->latest('published_at')
        ->paginate(10)
        ->withQueryString();

    return view('posts.index', compact('posts'));
}

  
    public function show(Post $post)
    {
        abort_if(is_null($post->published_at), 404);

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'published_at' => ['nullable', 'date'],
        ]);

        Post::create($data);
        return redirect(route('posts.index'));
    }
}