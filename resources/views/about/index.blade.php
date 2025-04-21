@extends('layouts.dashboard')

@section('content')
<main>
    <!-- Hero section start -->
    <section class="tp-about-tutor-area pt-110 pb-90">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <div class="tp-about-tutor-heading mb-60">
                        <div class="tp-about-tutor-subtitle d-flex align-items-center">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <path d="M1 10H19" stroke="#2D4CFF" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M10 19C14.9706 19 19 14.9706 19 10C19 5.02944 14.9706 1 10 1C5.02944 1 1 5.02944 1 10C1 14.9706 5.02944 19 10 19Z"
                                        stroke="#2D4CFF" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            <p>About CAD Masters</p>
                        </div>
                        <h3 class="tp-about-tutor-title">Ensuring Engineering Success. Together.</h3>
                        <p class="mt-30">CAD Masters is a leading engineering and design firm, recognized by Autodesk as
                            a trusted partner in the industry. As an Autodesk Gold Partner, Autodesk Authorized Training
                            Center, a Civil 3D Implementation Certified Expert, and a member of the Autodesk Developer
                            Network, we have been recognized by Autodesk for our expertise and commitment to our
                            clients.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="tp-about-tutor-thumb">
                        <img src="{{ asset('assets/img/about/autodesk-gold-partner.png') }}"
                            alt="Autodesk Gold Partner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- Services section start -->
    <section class="tp-service-area pt-120 pb-90 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="tp-service-item mb-30">
                        <div class="tp-service-icon">
                            <i class="fas fa-laptop-code fa-3x text-primary"></i>
                        </div>
                        <h4 class="tp-service-title">Software Solutions</h4>
                        <p>CAD Masters specializes in the AEC and GIS marketplaces. Our dedicated account
                            representatives, registered engineers, and CAD experts guide you in the purchase and
                            maintenance of your Autodesk subscription software.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-service-item mb-30">
                        <div class="tp-service-icon">
                            <i class="fas fa-chalkboard-teacher fa-3x text-primary"></i>
                        </div>
                        <h4 class="tp-service-title">Professional CAD Training</h4>
                        <p>We offer 36 different in-person and online professional CAD training courses, from beginner
                            to advanced topics. Courses cover Autodesk's AEC Industry Collection software, including
                            AutoCAD, Civil 3D, Revit, and more.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-service-item mb-30">
                        <div class="tp-service-icon">
                            <i class="fas fa-cogs fa-3x text-primary"></i>
                        </div>
                        <h4 class="tp-service-title">Engineering & Consulting</h4>
                        <p>Our engineers help with project planning and setup in BIM environments of Civil 3D or Revit.
                            We provide training and project support, either continuously as project managers or as
                            needed for specific issues.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section end -->

    <!-- Counter section start -->
    <section class="tp-counter-area pt-80 pb-60" style="background-color: #4661FD;">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="tp-counter-item mb-30">
                        <h4 class="tp-counter-number text-white"><span class="purecounter" data-purecounter-duration="1"
                                data-purecounter-end="36">0</span>+</h4>
                        <p class="text-white">Training Courses</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="tp-counter-item mb-30">
                        <h4 class="tp-counter-number text-white"><span class="purecounter" data-purecounter-duration="1"
                                data-purecounter-end="2">0</span></h4>
                        <p class="text-white">Training Locations</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="tp-counter-item mb-30">
                        <h4 class="tp-counter-number text-white">Gold</h4>
                        <p class="text-white">Autodesk Partner</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="tp-counter-item mb-30">
                        <h4 class="tp-counter-number text-white">#1</h4>
                        <p class="text-white">AEC Instructor 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter section end -->

    <!-- Hardware section start -->
    <section class="tp-feature-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-feature-content mb-30">
                        <h3 class="tp-feature-title">CAD Workstations</h3>
                        <p>Through our experience in training, technical support, and engineering work, CAD Masters has
                            developed deep knowledge of the hardware necessary for engineers, architects, surveyors, and
                            drafters to do their best work.</p>
                        <div class="tp-feature-list">
                            <ul>
                                <li><i class="fas fa-check"></i> Standard Workstation for AutoCAD users</li>
                                <li><i class="fas fa-check"></i> Premium Workstation for AutoCAD, Civil 3D, and Revit
                                    users</li>
                                <li><i class="fas fa-check"></i> Premium+ Workstation for all Autodesk products</li>
                                <li><i class="fas fa-check"></i> Ultimate Workstation for drone and Lidar data
                                    processing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-feature-content mb-30">
                        <h3 class="tp-feature-title">Technical Support</h3>
                        <p>Our award-winning technical support via phone, email, or remote web assistance is free with
                            any Autodesk software subscription, and includes:</p>
                        <div class="tp-feature-list">
                            <ul>
                                <li><i class="fas fa-check"></i> Installation and licensing assistance</li>
                                <li><i class="fas fa-check"></i> Troubleshooting software and drawing errors</li>
                                <li><i class="fas fa-check"></i> Brief how-to's and software usage pointers</li>
                                <li><i class="fas fa-check"></i> Purchase technical support in time blocks</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hardware section end -->

    <!-- Contact section start -->
    <section class="tp-contact-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-contact-info mb-30">
                        <h3 class="tp-contact-title">Contact Us</h3>
                        <div class="tp-contact-list">
                            <div class="tp-contact-item mb-30">
                                <h4>Walnut Creek Office</h4>
                                <p>201 N Civic Dr. Suite 182<br>Walnut Creek, CA 94596</p>
                                <span>Phone: (925) 939-1378</span>
                            </div>
                            <div class="tp-contact-item">
                                <h4>Sacramento Office</h4>
                                <p>1451 River Park Dr. Suite 126<br>Sacramento, CA 95815</p>
                                <span>Phone: (916) 641-0100</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    @if($companyProfile)
                    <div class="tp-contact-btn text-center">
                        <a href="{{ asset('storage/' . $companyProfile->file_path) }}" class="tp-btn"
                            download="{{ $companyProfile->file_name }}">
                            <i class="fas fa-download me-2"></i> Download Company Profile
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section end -->
</main>
@endsection

@push('styles')
<style>
.tp-service-item {
    padding: 40px 30px;
    border-radius: 10px;
    background-color: #fff;
    transition: all 0.3s ease;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.tp-service-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.tp-service-icon {
    margin-bottom: 20px;
}

.tp-counter-item {
    text-align: center;
}

.tp-counter-number {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 10px;
}

.tp-feature-list ul li {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.tp-feature-list ul li i {
    color: #4661FD;
    margin-right: 10px;
}

.tp-contact-item {
    padding: 30px;
    border-radius: 10px;
    background-color: #f8f9fa;
}

.tp-contact-item h4 {
    margin-bottom: 15px;
    color: #4661FD;
}
</style>
@endpush
