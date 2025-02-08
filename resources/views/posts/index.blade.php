@extends('layouts.app')

@section('content')
<h1>Blog Posts</h1>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>

@if($posts->count())
@foreach($posts as $post)
<article class="post-card">
    <h2>
        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
    </h2>
    <p><strong>Published on:</strong> {{ $post->created_at->format('d M, Y') }}</p>

    @if($post->categories->count())
    <p><strong>Categories:</strong>
        @foreach($post->categories as $category)
        <span class="badge badge-info">{{ $category->name }}</span>
        @endforeach
    </p>
    @endif

    <div class="actions">
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
                onclick="return confirm('Are you sure you want to delete this post?')">
                Delete
            </button>
        </form>
    </div>
</article>
@endforeach

{{ $posts->links() }}
@else
<p>No posts found. <a href="{{ route('posts.create') }}">Create one</a>.</p>
@endif
@endsection