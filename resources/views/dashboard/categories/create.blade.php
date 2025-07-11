@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

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
                            <h3 class="tp-contact-from-title">Create New Category 👍🏻</h3>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('dashboard.categories.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                   {{-- <div class="form-group col-md-6 mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>--}}

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="name">Category</label>
                                        <select class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                                            <option value="">Select a category</option>
                                            <option value="Architecture" {{ old('name') == 'Architecture' ? 'selected' : '' }}>Architecture</option>
                                            <option value="Structure" {{ old('name') == 'Structure' ? 'selected' : '' }}>Structure</option>
                                            <option value="Management" {{ old('name') == 'Management' ? 'selected' : '' }}>Management</option>
                                            <option value="Mechanical" {{ old('name') == 'Mechanical' ? 'selected' : '' }}>Mechanical</option>
                                            <option value="Electrical" {{ old('name') == 'Electrical' ? 'selected' : '' }}>Electrical</option>
                                            <option value="Graphics" {{ old('name') == 'Graphics' ? 'selected' : '' }}>Graphics</option>
                                            <option value="BIM Tracks" {{ old('name') == 'BIM Tracks' ? 'selected' : '' }}>BIM Tracks</option>
                                        </select>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-3">
                                        <label for="description">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary">Create Category</button>
                                        <a href="{{ route('dashboard.categories.index') }}" class="btn btn-secondary">Cancel</a>
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
