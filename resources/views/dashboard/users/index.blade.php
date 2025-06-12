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
                        <section class="tp-fact-wrapper">
                            <h1 align="center" class="jumbotron">Users Management</h1>

                            @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            @if(auth()->user()->is_admin)
                            <div class="text-end mb-3">
                                <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Add New User
                                </a>
                            </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Admin</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                                            <td>
                                                @if(auth()->user()->is_admin)
                                                <a href="{{ route('dashboard.users.edit', $user) }}"
                                                    class="btn btn-sm btn-info">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('dashboard.users.destroy', $user) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this user?')">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            @include('partials.pagination', ['items' => $users])
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
