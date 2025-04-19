{{--@extends('layouts.dashboard')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4">Edit Carousel Slide</h1>
        <a href="{{ route('dashboard.carousel.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <form action="{{ route('dashboard.carousel.update', $carousel) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text"
                           class="form-control @error('title') is-invalid @enderror"
                           id="title"
                           name="title"
                           value="{{ old('title', $carousel->title) }}"
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
                              rows="3">{{ old('description', $carousel->description) }}</textarea>
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
                           value="{{ old('link', $carousel->link) }}">
                    @error('link')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Replace Image</label>
                    <input type="file"
                           class="form-control @error('image') is-invalid @enderror"
                           id="image"
                           name="image"
                           accept="image/*">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    @if($carousel->image)
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
                               {{ old('is_active', $carousel->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input type="number"
                           class="form-control @error('order') is-invalid @enderror"
                           id="order"
                           name="order"
                           value="{{ old('order', $carousel->order) }}"
                           min="0">
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Slide
                </button>
            </form>
        </div>
    </div>
</div>
@endsection--}}




@extends('layouts.dashboard')

@section('content')
    <main class="tp-dashboard-body-bg">
        <section class="tpd-main pb-75 pt-75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        @include('partials.sidebar') {{-- Sidebar --}}
                    </div>
                    <div class="col-lg-9">
                        <div class="tpd-content-layout">
                            <div class="container">
                                <h3 class="tp-contact-from-title">Edit Carousel Slide 👍🏻</h3>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('dashboard.carousel.update', $carousel) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text"
                                                   class="form-control @error('title') is-invalid @enderror"
                                                   id="title"
                                                   name="title"
                                                   value="{{ old('title', $carousel->title) }}"
                                                   required>
                                            @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="link" class="form-label">Link (Optional)</label>
                                            <input type="url"
                                                   class="form-control @error('link') is-invalid @enderror"
                                                   id="link"
                                                   name="link"
                                                   value="{{ old('link', $carousel->link) }}">
                                            @error('link')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror"
                                                      id="description"
                                                      name="description"
                                                      rows="4">
                                                {{ old('description', $carousel->description) }}</textarea>
                                            @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="image" class="form-label">Replace Image</label>
                                            <input type="file"
                                                   class="form-control @error('image') is-invalid @enderror"
                                                   id="image"
                                                   name="image"
                                                   accept="image/*">
                                            @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            @if($carousel->image)
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/' . $carousel->image) }}"
                                                         alt="Current Image"
                                                         class="img-thumbnail"
                                                         width="100">
                                                </div>
                                            @endif
                                        </div>

                                        <div class="col-md-2 mb-3">
                                            <label for="order" class="form-label">Order</label>
                                            <input type="number"
                                                   class="form-control @error('order') is-invalid @enderror"
                                                   id="order"
                                                   name="order"
                                                   value="{{ old('order', $carousel->order) }}"
                                                   min="0">
                                            @error('order')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-1 align-content-center">
                                            <div class="form-check">
                                                <input type="checkbox"
                                                       class="form-check-input"
                                                       id="is_active"
                                                       name="is_active"
                                                       value="1"
                                                        {{ old('is_active', $carousel->is_active) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_active">Active</label>
                                            </div>
                                        </div>

                                        <div class="col-12 text-center mt-4">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Slide</button>
                                            <a href="{{ route('dashboard.carousel.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to List</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
