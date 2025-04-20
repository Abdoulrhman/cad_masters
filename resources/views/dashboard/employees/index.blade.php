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
                            <h1 class="text-center mb-4">Employees</h1>

                            @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <div class="text-end mb-3">
                                <a href="{{ route('dashboard.employees.create') }}" class="btn btn-primary">Add
                                    Employee</a>
                            </div>

                            @include('partials.table', [
                            'headers' => ['name', 'phone', 'email', 'position', 'image'],
                            'items' => $employees,
                            'actions' => [
                            'edit' => 'dashboard.employees.edit',
                            'delete' => 'dashboard.employees.destroy'
                            ]
                            ])
                        </section>
                    </div>

                    {{ $employees->links() }}
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
