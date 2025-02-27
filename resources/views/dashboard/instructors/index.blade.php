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
                            <h1 align="center" class="jumbotron" align="center">New Courses</h1>

                            @include('partials.table', [
                            'headers' => ['id', 'name', 'image', 'title'],
                            'items' => $instructors,
                            'actions' => [
                            'edit' => 'dashboard.instructors.edit',
                            'delete' => 'dashboard.instructors.destroy'
                            ]
                            ])
                        </section>
                    </div>

                    @include('partials.pagination', ['items' => $instructors])
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
