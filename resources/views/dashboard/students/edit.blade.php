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
                            <h2 class="mb-4 text-center">Edit Student</h2>

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="{{ route('dashboard.students.update', $student->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required
                                            value="{{ old('name', $student->name) }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" required
                                            value="{{ old('email', $student->email) }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            value="{{ old('phone', $student->phone) }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" id="dob"
                                            value="{{ old('dob', $student->dob) }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="">Select</option>
                                            <option value="male"
                                                {{ old('gender', $student->gender) == 'male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="female"
                                                {{ old('gender', $student->gender) == 'female' ? 'selected' : '' }}>
                                                Female</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="image" class="form-label">Profile Image</label>
                                        <input type="file" name="image" class="form-control" id="image"
                                            accept="image/jpg,image/jpeg,image/png">
                                    </div>

                                    @if ($student->image)
                                    <div class="col-12 text-center mt-2">
                                        <img src="{{ asset('storage/' . $student->image) }}" class="img-thumbnail"
                                            width="100">
                                        <p>Current Image</p>
                                    </div>
                                    @endif

                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{ route('dashboard.students.index') }}" class="btn btn-secondary">Cancel</a>
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
