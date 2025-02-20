@extends('layouts.app')

@section('content')
<h1>Create New Post</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
    </div>

    <div>
        <label for="content">Content:</label>
        <textarea name="content" id="content">{{ old('content') }}</textarea>
    </div>

    <!-- Category checkboxes -->
    @if($categories->count())
        <div>
            <h3>Categories</h3>
            @foreach($categories as $category)
                <label>
                    <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                    {{ $category->name }}
                </label>
            @endforeach
        </div>
    @endif

    <button type="submit">Create</button>
</form>
@endsection
