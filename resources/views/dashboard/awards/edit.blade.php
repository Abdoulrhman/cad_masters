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
                                <h3 class="tp-contact-from-title">Edit Award 👍🏻</h3>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('dashboard.awards.update', $award->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" required
                                                   value="{{ old('name', $award->name) }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="image" class="form-label">Award Image</label>
                                            <input type="file" name="image" class="form-control" id="image"
                                                   accept="image/jpg,image/jpeg,image/png">
                                        </div>

                                        @if ($award->image)
                                            <div class="col-12 text-center mt-2">
                                                <img src="{{ asset('storage/' . $award->image) }}" class="img-thumbnail"
                                                     width="100">
                                                <p>Current Image</p>
                                            </div>
                                        @endif

                                        <div class="col-12 text-center mt-4">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="{{ route('dashboard.awards.index') }}" class="btn btn-secondary">Cancel</a>
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
