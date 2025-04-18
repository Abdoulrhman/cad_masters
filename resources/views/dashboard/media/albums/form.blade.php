@extends('layouts.dashboard')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mt-4">{{ isset($album) ? 'Edit Album' : 'Create New Album' }}</h1>
        <a href="{{ route('dashboard.media.albums.index') }}" class="btn btn-secondary">Back to Albums</a>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card mb-4">
        <div class="card-body">
            <form
                action="{{ isset($album) ? route('dashboard.media.albums.update', $album) : route('dashboard.media.albums.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($album))
                @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                        value="{{ old('title', $album->title ?? '') }}" required>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" rows="3">{{ old('description', $album->description ?? '') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="cover_image" class="form-label">Cover Image</label>
                    @if(isset($album) && $album->cover_image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $album->cover_image) }}" alt="Current cover"
                            class="img-thumbnail" style="max-width: 200px;">
                    </div>
                    @endif
                    <input type="file" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image"
                        name="cover_image" accept="image/*">
                    @error('cover_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ isset($album) ? 'Update Album' : 'Create Album' }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
