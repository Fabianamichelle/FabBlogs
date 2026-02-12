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



public function uploadPostImage(Request $request)
{
    $request->validate([
        'image' => ['required', 'image', 'max:4096'], // 4MB
    ]);

    $path = $request->file('image')->store('posts', 'public'); // storage/app/public/posts/...

    return response()->json([
        'url' => asset('storage/' . $path),
        'path' => $path,
    ]);
}

}