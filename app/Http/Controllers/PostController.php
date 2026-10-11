<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'published')
            ->latest()
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::where('status', 'published')
            ->findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|string',
            'status' => 'required|string|max:50',
        ]);

        $post = Post::create($validated);

        return response()->json($post, 201);
    }
}