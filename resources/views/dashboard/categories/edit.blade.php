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
                                <h3 class="tp-contact-from-title">Edit Edit Course Category 👍🏻</h3>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                   {{-- @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif--}}

                                <form action="{{ route('dashboard.categories.update', $category->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="form-group col-md-6 mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               id="name" name="name" value="{{ old('name', $category->name) }}" required>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                        <div class="form-group col-md-6 mb-3">
                                        <label for="description">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                              id="description" name="description" rows="3">{{ old('description', $category->description) }}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                        <div class="form-group col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary">Update Category</button>
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
