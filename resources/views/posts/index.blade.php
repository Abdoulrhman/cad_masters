@extends('layouts.app') 

@section('content')
<h1>Blog Posts</h1>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<a href="{{ route('posts.create') }}">Create New Post</a>

@foreach($posts as $post)
    <article>
        <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
        <p>Published on {{ $post->created_at->format('d M, Y') }}</p>
        @if($post->categories->count())
            <p>Categories: 
                @foreach($post->categories as $category)
                    {{ $category->name }}
                @endforeach
            </p>
        @endif
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </article>
@endforeach

{{ $posts->links() }}
@endsection
