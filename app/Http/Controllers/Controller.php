<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
        {
            $posts = \App\Models\Post::whereNotNull('published_at')
                ->latest('published_at')
                ->paginate(10);

            return view('posts.index', compact('posts'));
        }
}
