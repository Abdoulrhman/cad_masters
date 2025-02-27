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
                            <h3 class="tp-contact-from-title">Edit Course 👍🏻</h3>

                            {{-- Validation Errors --}}
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            {{-- Success Message --}}
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            {{-- Edit Course Form --}}
                            <form id="contact-form" method="POST"
                                action="{{ route('dashboard.employees.update', $employees->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="tp-contact-input-form">
                                    <div class="row">
                                        {{-- Job Applicant Name --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Job Applicant Name</label>
                                                <input type="text" name="name" value="{{ old('name', $employees->name) }}"
                                                    class="form-control" required>
                                            </div>
                                        </div>

                                        {{-- Price --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Mobile Number</label>
                                                <input type="number" name="number"
                                                    value="{{ old('number', $employees->number) }}"
                                                    class="form-control input-lg" required>
                                            </div>
                                        </div>

                                        {{-- Email --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Email</label>
                                                <input type="email" name="email"
                                                    value="{{ old('email', $employees->email) }}"
                                                    class="form-control input-lg">
                                            </div>
                                        </div>

                                        {{-- City --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>subject</label>
                                                <input type="text" name="subject"
                                                    value="{{ old('subject', $employees->subject) }}"
                                                    class="form-control input-lg">
                                            </div>
                                        </div>

                                        {{-- Upload Course Photo --}}
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Upload Your CV</label>
                                                <input type="file" name="pdf" class="form-control" accept="application/pdf/*">

                                                {{-- Show Current Image Preview if Exists --}}
                                                @if ($employees->pdf)
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/pdf/' . $employees->pdf) }}"
                                                        class="img-thumbnail" width="150">
                                                    <p>Current CV</p>
                                                </div>
                                                @endif

                                                <input type="hidden" name="hidden_image" value="{{ $employees->pdf }}" />
                                            </div>
                                        </div>

                                        {{-- Submit Button --}}
                                        <div class="tp-contact-btn">
                                            <button type="submit" class="btn btn-primary btn-lg">Save</button>
                                            <p style="display: none;" class="ajax-response text-danger mt-1 mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
