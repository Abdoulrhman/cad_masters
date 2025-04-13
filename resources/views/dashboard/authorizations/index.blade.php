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
                            <h1 align="center" class="jumbotron" align="center">New Authorization</h1>

                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <div class="text-end mb-3">
                                <a href="{{ route('dashboard.authorizations.create') }}" class="btn btn-primary">Add Authorization</a>
                            </div>

                            @include('partials.table', [
                            'headers' => ['id', 'name', 'category', 'image'],
                            'items' => $authorizations,
                            'actions' => [
                            'edit' => 'dashboard.authorizations.edit',
                            'delete' => 'dashboard.authorizations.destroy'
                            ]
                            ])
                        </section>
                    </div>

                    @include('partials.pagination', ['items' => $authorizations])
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
