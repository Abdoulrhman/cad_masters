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
                                <h2 class="mb-4 text-center">Edit Instructor </h2>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" required
                                                   value="{{ old('name', $user->name) }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required
                                                   value="{{ old('email', $user->email) }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>New Password (leave blank to keep current)</label>
                                            <input type="password" name="password" class="form-control"
                                                   value="{{ old('password', $user->password) }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Role</label>
                                            <select name="role" class="form-control" required>
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->name }}"
                                                            {{ $user->hasRole($role->name) ? 'selected' : '' }}
                                                            {{ $role->name === 'super-admin' && !auth()->user()->hasRole('super-admin') ? 'disabled' : '' }}>
                                                        {{ $role->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-12 text-center mt-4">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="{{ route('dashboard.users.index') }}" class="btn btn-secondary">Cancel</a>
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
