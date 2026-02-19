<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->get();
        return view('welcome', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        Post::create($validated);

        return redirect('/')->with('success', 'Post created successfully!');
    }
}
