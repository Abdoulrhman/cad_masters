@extends('layouts.dashboard')

@section('content')
<main class="tp-dashboard-body-bg">
    <section class="tpd-main pb-75 pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('partials.sidebar')
                </div>
                <div class="col-lg-9">
                    <div class="tpd-content-layout">
                        <section class="tp-fact-wrapper">
                            <h1 align="center" class="jumbotron">Contact Information</h1>

                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-info-item mb-40">
                                        <div class="contact-info-text">
                                            <h4 class="contact-info-title">Walnut Creek Office</h4>
                                            <p><i class="fas fa-map-marker-alt"></i> 201 N. Civic Dr. Suite 182</p>
                                            <p>Walnut Creek, CA 94596</p>
                                            <p><i class="fas fa-phone"></i> <a href="tel:9259391378">(925) 939-1378</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="contact-info-item mb-40">
                                        <div class="contact-info-text">
                                            <h4 class="contact-info-title">Sacramento Office</h4>
                                            <p><i class="fas fa-map-marker-alt"></i> 1451 River Park Dr. Suite 126</p>
                                            <p>Sacramento, CA 95815</p>
                                            <p><i class="fas fa-phone"></i> <a href="tel:9166410100">(916) 641-0100</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="contact-info-item">
                                        <div class="contact-info-text">
                                            <h4 class="contact-info-title">Sales & Support Hours</h4>
                                            <div class="contact-info-list">
                                                <div class="info-item">
                                                    <span class="info-title">Monday</span>
                                                    <span class="info-text">8:30am – 5:30pm</span>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-title">Tuesday</span>
                                                    <span class="info-text">8:30am – 5:30pm</span>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-title">Wednesday</span>
                                                    <span class="info-text">8:30am – 5:30pm</span>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-title">Thursday</span>
                                                    <span class="info-text">8:30am – 5:30pm</span>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-title">Friday</span>
                                                    <span class="info-text">8:30am – 5:30pm</span>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-title">Saturday</span>
                                                    <span class="info-text">Closed</span>
                                                </div>
                                                <div class="info-item">
                                                    <span class="info-title">Sunday</span>
                                                    <span class="info-text">Closed</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <h4 class="mb-3">Contact Form Settings</h4>
                                <form action="{{ route('contact.settings.update') }}" method="POST" class="contact-form">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="sales_email" class="form-label">Sales Email</label>
                                                <input type="email" name="sales_email" id="sales_email"
                                                       class="form-control @error('sales_email') is-invalid @enderror"
                                                       value="{{ old('sales_email', $settings->sales_email ?? '') }}">
                                                @error('sales_email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="support_email" class="form-label">Support Email</label>
                                                <input type="email" name="support_email" id="support_email"
                                                       class="form-control @error('support_email') is-invalid @enderror"
                                                       value="{{ old('support_email', $settings->support_email ?? '') }}">
                                                @error('support_email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="webmaster_email" class="form-label">Webmaster Email</label>
                                                <input type="email" name="webmaster_email" id="webmaster_email"
                                                       class="form-control @error('webmaster_email') is-invalid @enderror"
                                                       value="{{ old('webmaster_email', $settings->webmaster_email ?? '') }}">
                                                @error('webmaster_email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="tp-btn">Update Settings</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('styles')
<style>
.contact-info-list .info-item {
    display: flex;
    justify-content: space-between;
    padding: 8px 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.contact-info-list .info-item:last-child {
    border-bottom: none;
}

.contact-info-item {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 8px;
    margin-bottom: 30px;
}

.contact-info-title {
    font-size: 20px;
    margin-bottom: 15px;
    color: #333;
}

.contact-info-text p {
    margin-bottom: 8px;
}

.contact-info-text i {
    margin-right: 10px;
    color: var(--tp-theme-primary);
}

.contact-info-text a {
    color: inherit;
    text-decoration: none;
}

.contact-info-text a:hover {
    color: var(--tp-theme-primary);
}

.info-title {
    font-weight: 500;
}

.info-text {
    color: #666;
}
</style>
@endpush
