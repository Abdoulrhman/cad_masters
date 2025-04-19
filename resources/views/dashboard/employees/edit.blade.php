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
                                <h3 class="tp-contact-from-title">Edit Employee 👍🏻</h3>

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('dashboard.employees.update', $employee->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" required
                                                   value="{{ old('name', $employee->name) }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" required
                                                   value="{{ old('email', $employee->email) }}">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="subject" class="form-label">Subject</label>
                                            <input type="text" name="subject" class="form-control" id="subject" required
                                                   value="{{ old('subject', $employee->subject) }}">
                                        </div>


                                        <div class="col-md-6 mb-3">
                                            <label for="image" class="form-label">Upload Your CV</label>
                                            <input type="file" name="pdf" class="form-control" id="pdf"
                                                   accept="application/pdf, application/word">
                                        </div>

                                        @if ($employee->pdf)
                                            <div class="col-12 text-center mt-2">
                                                <img src="{{ asset('storage/' . $employee->pdf) }}" class="img-thumbnail"
                                                     width="100">
                                                <p>Current CV</p>
                                            </div>
                                        @endif

                                        <div class="col-12 text-center mt-4">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="{{ route('dashboard.employees.index') }}" class="btn btn-secondary">Cancel</a>
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
