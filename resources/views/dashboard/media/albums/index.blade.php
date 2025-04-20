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
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h1 class="tp-contact-from-title">Media Albums</h1>
                            <a href="{{ route('dashboard.media.albums.create') }}" class="btn btn-primary">Create New Album</a>
                        </div>

                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="row">
                            @foreach($albums as $album)
                            <div class="col-md-6 mb-4">
                                <div class="card h-100">
                                    @if($album->cover_image)
                                    <img src="{{ asset('storage/' . $album->cover_image) }}" class="card-img-top" alt="{{ $album->title }}"
                                        style="height: 200px; object-fit: cover;">
                                    @else
                                    <div class="bg-light text-center p-4" style="height: 200px;">
                                        <i class="fas fa-images fa-4x text-secondary mt-4"></i>
                                    </div>
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $album->title }}</h5>
                                        <p class="card-text text-muted">
                                            {{ Str::limit($album->description, 100) }}
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                {{ $album->media_count }} {{ Str::plural('item', $album->media_count) }}
                                            </small>
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <div class="btn-group w-100">
                                            <a href="{{ route('dashboard.media.albums.show', $album) }}" class="btn btn-outline-primary">
                                                <i class="fas fa-eye"></i> View
                                            </a>
                                            <a href="{{ route('dashboard.media.albums.edit', $album) }}" class="btn btn-outline-secondary">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('dashboard.media.albums.destroy', $album) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure you want to delete this album?')">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $albums->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
