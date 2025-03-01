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
                        <h3 class="mb-4 text-center">Students</h3>

                        @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <div class="text-end mb-3">
                            <a href="{{ route('dashboard.students.create') }}" class="btn btn-primary">Add Student</a>
                        </div>

                        @include('partials.table', [
                        'headers' => ['id', 'name', 'email', 'phone', 'dob', 'gender', 'image'],
                        'items' => $students,
                        'actions' => [
                        'edit' => 'dashboard.students.edit',
                        'delete' => 'dashboard.students.destroy'
                        ]
                        ])

                        @include('partials.pagination', ['items' => $students])
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
