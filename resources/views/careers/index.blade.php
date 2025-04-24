@extends('layouts.dashboard')

@section('title')
    Careers
@endsection

@section('content')
<main>


    <!-- undergraduate breadcrumb start -->
    <section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
        <div class="tp-breadcrumb__bg" style="background: url('{{ asset('/assets/img/breadcrumb/Careers.PNG') }}') no-repeat center / cover !important;max-width: 100%"></div>
    </section>
    <!-- undergraduate breadcrumb end -->

    <!-- Hero section start -->
    <section class="tp-about-tutor-area pt-110 pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="tp-about-tutor-heading mb-60 text-center">
                        <h2 class="tp-section-title">Join Our Team</h2>
                        <p class="mt-30">We're looking for talented individuals to help us shape the future of CAD and
                            engineering. Join our team of experts and work with cutting-edge technology.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- Open positions section start -->
    <section class="tp-service-area pt-90 pb-90 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-60">
                        <h3>Open Positions</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($positions as $position)
                <div class="col-lg-4 col-md-6">
                    <div class="tp-service-item mb-30">
                        <div class="tp-service-content">
                            <span class="job-type">{{ $position['type'] }}</span>
                            <h4 class="job-title">{{ $position['title'] }}</h4>
                            <span class="department">{{ $position['department'] }}</span>
                            <p class="mt-3">{{ $position['description'] }}</p>
                            <div class="requirements mt-4">
                                <h5>Requirements:</h5>
                                <ul class="list-unstyled">
                                    @foreach($position['requirements'] as $requirement)
                                    <li><i class="fas fa-check-circle text-primary me-2"></i>{{ $requirement }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <button class="tp-btn mt-4" onclick="applyForPosition('{{ $position['title'] }}')">Apply
                                Now</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Open positions section end -->

    <!-- Application form section start -->
    <section class="tp-contact-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tp-contact-form">
                        <h3 class="text-center mb-50">Apply for Position</h3>

                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        <form action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data"
                            id="applicationForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="full_name" class="form-label">Full Name *</label>
                                        <input type="text" class="form-control @error('full_name') is-invalid @enderror"
                                            id="full_name" name="full_name" required value="{{ old('full_name') }}">
                                        @error('full_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" required value="{{ old('email') }}">
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" required value="{{ old('phone') }}">
                                        @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="position" class="form-label">Position *</label>
                                        <select class="form-control @error('position') is-invalid @enderror"
                                            id="position" name="position" required>
                                            <option value="">Select Position</option>
                                            @foreach($positions as $position)
                                            <option value="{{ $position['title'] }}"
                                                {{ old('position') == $position['title'] ? 'selected' : '' }}>
                                                {{ $position['title'] }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('position')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="experience" class="form-label">Relevant Experience *</label>
                                        <textarea class="form-control @error('experience') is-invalid @enderror"
                                            id="experience" name="experience" rows="4"
                                            required>{{ old('experience') }}</textarea>
                                        @error('experience')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="skills" class="form-label">Skills *</label>
                                        <textarea class="form-control @error('skills') is-invalid @enderror" id="skills"
                                            name="skills" rows="4" required>{{ old('skills') }}</textarea>
                                        @error('skills')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="cover_letter" class="form-label">Cover Letter</label>
                                        <textarea class="form-control @error('cover_letter') is-invalid @enderror"
                                            id="cover_letter" name="cover_letter"
                                            rows="6">{{ old('cover_letter') }}</textarea>
                                        @error('cover_letter')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="resume" class="form-label">Resume/CV *</label>
                                        <input type="file" class="form-control @error('resume') is-invalid @enderror"
                                            id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                                        <small class="text-muted">Upload PDF, DOC, or DOCX file (max 5MB)</small>
                                        @error('resume')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="tp-btn w-100">Submit Application</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Application form section end -->
</main>
@endsection

@push('styles')
<style>
.job-type {
    display: inline-block;
    padding: 5px 15px;
    background-color: #4661FD;
    color: #fff;
    border-radius: 20px;
    font-size: 14px;
    margin-bottom: 10px;
}

.job-title {
    font-size: 24px;
    margin-bottom: 5px;
    color: #222;
}

.department {
    color: #666;
    font-size: 16px;
}

.requirements ul li {
    margin-bottom: 10px;
    font-size: 15px;
}

.tp-contact-form {
    background: #fff;
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.form-label {
    font-weight: 500;
    margin-bottom: 8px;
}

.form-control {
    border: 1px solid #e2e2e2;
    padding: 12px 20px;
    height: auto;
}

.form-control:focus {
    border-color: #4661FD;
    box-shadow: none;
}
</style>
@endpush

@push('scripts')
<script>
function applyForPosition(position) {
    const positionSelect = document.getElementById('position');
    positionSelect.value = position;
    document.querySelector('.tp-contact-area').scrollIntoView({
        behavior: 'smooth'
    });
}
</script>
@endpush
