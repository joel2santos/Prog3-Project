<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// -i for invokable controller
// -r for resource controller
// -api for api controller

class PostController extends Controller
{
    // __invoke is good for a one-function controller.
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

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
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {
        // never utilize all() method when creating or updating
        Post::create($request->validated());
        return to_route('posts.index')->with('status', 'Post created!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return to_route('posts.index')->with('status', 'Post updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index')->with('status', 'Post deleted!');
    }
}

// other methods: 

// $post->title = $request->input('title');
// $post->body = $request->input('body');
// $post->save();

// $post->update([
//     'title' => $request->input('title'),
//     'body' => $request->input('body')
// ]);