@extends('layouts.dashboard')

@section('content')
<main class="tp-dashboard-body-bg">
    <section class="tpd-main pb-75 pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('partials.sidebar')
                </div>
                <div class="col-lg-9">
                    <div class="tpd-content-layout">
                        <div class="container">
                            <h3 class="tp-contact-from-title">Create New Employee 👍🏻</h3>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('dashboard.employees.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                                id="name" value="{{ old('name') }}" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                                id="phone" value="{{ old('phone') }}" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" value="{{ old('email') }}" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="position" class="form-label">Position</label>
                                            <input type="text" name="position" class="form-control @error('position') is-invalid @enderror"
                                                id="position" value="{{ old('position') }}" required>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                                id="image" accept="image/*">
                                        </div>

                                        <div class="col-12 text-center mt-4">
                                            <button type="submit" class="btn btn-primary">Create Employee</button>
                                            <a href="{{ route('dashboard.employees.index') }}" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
