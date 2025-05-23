@extends('dashboard.layout')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4">{{ isset($carousel) ? 'Edit' : 'Create' }} Carousel Slide</h1>
        <a href="{{ route('dashboard.carousel.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <form action="{{ isset($carousel) ? route('dashboard.carousel.update', $carousel) : route('dashboard.carousel.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @if(isset($carousel))
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text"
                           class="form-control @error('title') is-invalid @enderror"
                           id="title"
                           name="title"
                           value="{{ old('title', $carousel->title ?? '') }}"
                           required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror"
                              id="description"
                              name="description"
                              rows="3"
                              required>{{ old('description', $carousel->description ?? '') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">Link (Optional)</label>
                    <input type="url"
                           class="form-control @error('link') is-invalid @enderror"
                           id="link"
                           name="link"
                           value="{{ old('link', $carousel->link ?? '') }}">
                    @error('link')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">
                        {{ isset($carousel) ? 'Replace Image' : 'Image' }}
                    </label>
                    <input type="file"
                           class="form-control @error('image') is-invalid @enderror"
                           id="image"
                           name="image"
                           accept="image/*"
                           {{ isset($carousel) ? '' : 'required' }}>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    @if(isset($carousel) && $carousel->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $carousel->image) }}"
                                 alt="Current Image"
                                 class="img-thumbnail"
                                 style="max-height: 200px;">
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input type="checkbox"
                               class="form-check-input"
                               id="is_active"
                               name="is_active"
                               value="1"
                               {{ old('is_active', $carousel->is_active ?? true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input type="number"
                           class="form-control @error('order') is-invalid @enderror"
                           id="order"
                           name="order"
                           value="{{ old('order', $carousel->order ?? 0) }}"
                           min="0">
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    {{ isset($carousel) ? 'Update' : 'Create' }} Slide
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
