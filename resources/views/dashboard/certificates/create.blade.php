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
                            <h3 class="tp-contact-from-title">Create New Certificates 👍🏻</h3>

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="{{ route('dashboard.certificates.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Certificates Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required
                                            value="{{ old('name') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="image" class="form-label">Certificates Image</label>
                                        <input type="file" name="image" class="form-control" id="image"
                                            accept="image/jpg,image/jpeg,image/png" required>
                                    </div>

                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary">Create Certificates</button>
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
