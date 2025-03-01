@extends('layouts.dashboard')

@section('content')
<main class="tp-dashboard-body-bg">
    <section class="tpd-main pb-75 pt-75">
        <div class="container">
            <h2 class="mb-4 text-center">Edit Student</h2>

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
            </div>
            @endif

            <form action="{{ route('dashboard.students.update', $student->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label>Name</label>
                <input type="text" name="name" class="form-control" required value="{{ old('name', $student->name) }}">

                <label>Email</label>
                <input type="email" name="email" class="form-control" required
                    value="{{ old('email', $student->email) }}">

                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone', $student->phone) }}">

                <label>Date of Birth</label>
                <input type="date" name="dob" class="form-control" value="{{ old('dob', $student->dob) }}">

                <label>Gender</label>
                <select name="gender" class="form-control">
                    <option value="">Select</option>
                    <option value="male" {{ old('gender', $student->gender) == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender', $student->gender) == 'female' ? 'selected' : '' }}>Female
                    </option>
                </select>

                <label>Profile Image</label>
                <input type="file" name="image" class="form-control">

                @if ($student->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $student->image) }}" class="img-thumbnail" width="100">
                    <p>Current Image</p>
                </div>
                @endif

                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </section>
</main>
@endsection
