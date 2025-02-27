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
                            <h2 class="mb-4 text-center">Create New Course</h2>

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="{{ route('dashboard.employees.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Job Applicant Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required
                                            value="{{ old('name') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="price" class="form-label">Mobile Number</label>
                                        <input type="number" name="number" class="form-control" id="number" required
                                            step="0.01" value="{{ old('number') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="price_offer" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            step="0.01" value="{{ old('email') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="schedule_time" class="form-label">Subject</label>
                                        <input type="text" name="subject" class="form-control" id="subject"
                                            value="{{ old('subject') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="image" class="form-label">Upload Your CV</label>
                                        <input type="file" name="pdf" class="form-control" id="pdf"
                                            accept="application/pdf, application/word">
                                    </div>

                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary">Create New Applicant</button>
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
