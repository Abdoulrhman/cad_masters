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
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Employee</h3>
                                </div>
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="{{ route('dashboard.employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                                    id="name" value="{{ old('name', $employee->name) }}" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                                    id="phone" value="{{ old('phone', $employee->phone) }}" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                                    id="email" value="{{ old('email', $employee->email) }}" required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="position" class="form-label">Position</label>
                                                <input type="text" name="position" class="form-control @error('position') is-invalid @enderror"
                                                    id="position" value="{{ old('position', $employee->position) }}" required>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                                    id="image" accept="image/*">
                                                @if($employee->image)
                                                    <div class="mt-2">
                                                        <img src="{{ asset('storage/' . $employee->image) }}" alt="Employee image" class="img-thumbnail" width="100">
                                                        <p class="small text-muted">Current Image</p>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="col-12 text-center mt-4">
                                                <button type="submit" class="btn btn-primary">Update Employee</button>
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
