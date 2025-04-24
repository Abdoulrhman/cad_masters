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
                            <h3 class="tp-contact-from-title">Manage Company Profile 👍🏻</h3>

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                        <div class="card">
                            <div class="card-body">
                                <form
                                    action="{{ $companyProfile ? route('dashboard.company-profile.update', $companyProfile) : route('dashboard.company-profile.store') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if($companyProfile)
                                    @method('PUT')
                                    @endif

                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title"
                                            value="{{ old('title', $companyProfile->title ?? '') }}" required>
                                        @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror"
                                            id="description" name="description" rows="4"
                                            required>{{ old('description', $companyProfile->description ?? '') }}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="file" class="form-label">Company Profile Document</label>
                                        <input type="file" class="form-control @error('file') is-invalid @enderror"
                                            id="file" name="file" accept=".pdf,.doc,.docx"
                                            {{ $companyProfile ? '' : 'required' }}>
                                        <small class="text-muted">Upload PDF, DOC, or DOCX file (max 10MB)</small>
                                        @error('file')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    @if($companyProfile && $companyProfile->file_path)
                                    <div class="mb-3">
                                        <p>Current file: <a href="{{ asset('storage/' . $companyProfile->file_path) }}"
                                                target="_blank">{{ $companyProfile->file_name }}</a></p>
                                    </div>
                                    @endif

                                    <div class="text-end">
                                        <button type="submit" class="tp-btn">
                                            {{ $companyProfile ? 'Update' : 'Save' }} Company Profile
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
