<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = Post::create([
            'author_id' => auth()->user()->id,
            'title' => $request->title,
            'body' => $request->body,
            'summary' => $request->summary,
            'published_at' => $request->published_at,
        ]);

        return redirect()->route('admin.index')->with('success', 'Post Created Successfully');
    }

    public function show(Post $post)
    {
        return view('post.show', [
            'post' => $post,
        ]);
    }
}
