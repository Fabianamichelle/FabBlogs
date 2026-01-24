<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required','string', 'max:255'],
            'excerpt' => ['nullable', 'string'],
            'body' => ['required','string'],
            'published_at' => ['nullable', 'date'],
        ]);

        Post::create($data);

        return redirect(route('posts.index'));
    }
}