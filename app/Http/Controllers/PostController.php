<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('categories')->latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
            'user_id' => auth()->id() ?? null,
        ]);

        // Attach categories if provided
        if($request->has('categories')) {
            $post->categories()->attach($request->categories);
        }

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:3',
            'content' => 'required',
        ]);

        // Update post
        $post->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'content' => $request->content,
        ]);

        // Sync categories if provided
        if($request->has('categories')) {
            $post->categories()->sync($request->categories);
        } else {
            $post->categories()->detach();
        }

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
