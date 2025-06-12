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
                        <section class="tp-fact-wrapper">
                            <h1 align="center" class="jumbotron" align="center">Edit User</h1>

                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form method="POST" action="{{ route('dashboard.users.update', $user) }}"
                                class="needs-validation" novalidate>
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name', $user->name) }}" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email', $user->email) }}" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="password" class="form-label">New Password (leave blank to keep
                                            current)</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm New
                                            Password</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-select" id="role" name="role" required>
                                            <option value="user"
                                                {{ old('role', $user->role) === 'user' ? 'selected' : '' }}>User
                                            </option>
                                            <option value="instructor"
                                                {{ old('role', $user->role) === 'instructor' ? 'selected' : '' }}>
                                                Instructor</option>
                                            <option value="admin"
                                                {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="text-end mt-4">
                                    <a href="{{ route('dashboard.users.index') }}"
                                        class="btn btn-secondary me-2">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Update User</button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
