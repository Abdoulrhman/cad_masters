@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Laravel requires this for updating resources -->

    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
    </div>

    <div>
        <label for="content">Content:</label>
        <textarea name="content" id="content">{{ old('content', $post->content) }}</textarea>
    </div>

    <!-- Category checkboxes -->
    @if($categories->count())
    <div>
        <h3>Categories</h3>
        @foreach($categories as $category)
        <label>
            <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                {{ in_array($category->id, $post->categories->pluck('id')->toArray()) ? 'checked' : '' }}>
            {{ $category->name }}
        </label>
        @endforeach
    </div>
    @endif

    <button type="submit">Update</button>
</form>
@endsection