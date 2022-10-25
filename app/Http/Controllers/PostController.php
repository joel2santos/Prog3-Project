<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// -i for invokable controller
// -r for resource controller
// -api for api controller

class PostController extends Controller
{
    // __invoke is good for a one-function controller.
    public function index()
    {
        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ], [
            'title.required' => 'El título del post es obligatorio.'
            'body.required' => 'El contenido del post es obligatorio.'
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status', 'Post saved!');

        return to_route('posts.index');
    }
}
