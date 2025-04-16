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
                            <h1 align="center" class="jumbotron" align="center">New Media</h1>

                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <div class="text-end mb-3">
                                <a href="{{ route('dashboard.medias.create') }}" class="btn btn-primary">Add Media</a>
                            </div>

                            @include('partials.table', [
                            'headers' => ['id', 'name', 'image'],
                            'items' => $medias,
                            'actions' => [
                            'edit' => 'dashboard.medias.edit',
                            'delete' => 'dashboard.medias.destroy'
                            ]
                            ])
                        </section>
                    </div>

                    @include('partials.pagination', ['items' => $medias])
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
