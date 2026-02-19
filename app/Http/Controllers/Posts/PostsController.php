<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    private $posts;

    public function __construct()
    {
        $this->posts = new Post();
    }

    public function index()
    {
        $posts = $this->posts->all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $post = $this->posts->create($request->only(['title', 'content']));
        return response()->json($post, 201);
    }
}
