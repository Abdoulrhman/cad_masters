@extends('layouts.dashboard')

@section('content')
<main class="tp-dashboard-body-bg">
    <section class="tpd-main pb-75 pt-75">
        <div class="container">
            <h2 class="mb-4 text-center">Add Student</h2>

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>@foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
            </div>
            @endif

            <form action="{{ route('dashboard.students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label>Name</label>
                <input type="text" name="name" class="form-control" required value="{{ old('name') }}">

                <label>Email</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">

                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">

                <label>Date of Birth</label>
                <input type="date" name="dob" class="form-control" value="{{ old('dob') }}">

                <label>Gender</label>
                <select name="gender" class="form-control">
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <label>Profile Image</label>
                <input type="file" name="image" class="form-control">

                <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
        </div>
    </section>
</main>
@endsection
