@extends('layouts.dashboard')

@section('content')
<main class="tp-dashboard-body-bg">
    <section class="tpd-main pb-75 pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">@include('partials.sidebar')</div>
                <div class="col-lg-9">
                    <div class="tpd-content-layout">
                        <h2 class="mb-4 text-center">Edit Course</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @include('dashboard.courses._form', ['formMode' => 'edit'])
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@include('dashboard.courses.partials._form_scripts')
