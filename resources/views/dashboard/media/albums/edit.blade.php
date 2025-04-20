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
                        <h3 class="tp-contact-from-title">Edit Album: {{ $album->title }}</h3>
                        @include('dashboard.media.albums.form', [
                            'action' => route('dashboard.media.albums.update', $album),
                            'method' => 'PUT',
                            'album' => $album
                        ])
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
