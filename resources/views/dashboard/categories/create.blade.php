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
                                <h2 class="mb-4 text-center">Create New Category</h2>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('dashboard.categories.store') }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="description" class="form-label">Category Description</label>
                                            <input type="text" name="name" class="form-control" id="desc_name" required
                                                   value="{{ old('name') }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="description" class="form-label">Course Description</label>
                                            <input type="text" name="description" class="form-control" id="description" required
                                                   value="{{ old('description') }}">
                                        </div>

                                        <div class="col-12 text-center mt-4">
                                            <button type="submit" class="btn btn-primary" href="{{route('dashboard.categories.index') }}">Create Category</button>
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
