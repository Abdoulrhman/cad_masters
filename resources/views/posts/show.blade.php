@extends('layouts.app')

@section('content')
<h1>{{ $post->title }}</h1>

<p>{{ $post->content }}</p>

@if ($post->categories->count())
<h3>Categories:</h3>
<ul>
    @foreach ($post->categories as $category)
    <li>{{ $category->name }}</li>
    @endforeach
</ul>
@endif

<div>
    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>

    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
    </form>
</div>

<a href="{{ route('posts.index') }}">Back to Posts</a>
@endsection