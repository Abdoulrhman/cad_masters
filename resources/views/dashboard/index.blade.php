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
                    <!-- dashboard-content-area-start -->
                    <div class="tpd-content-layout">

                        <!-- fact-area-start -->
                        <section class="tp-fact-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-dashboard-section">
                                        <h2 class="tp-dashboard-title">Dashboard</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                        <div class="tp-fact-content">
                                            <h4 class="tp-fact-count">20</h4>
                                            <span>Active Courses</span>
                                        </div>
                                        <div class="tp-fact-icon">
                                            <span><img src="assets/img/dashboard/icon/fact/teacher.svg"
                                                    alt="fact-icon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                        <div class="tp-fact-content">
                                            <h4 class="tp-fact-count">84</h4>
                                            <span>Enrolled Courses</span>
                                        </div>
                                        <div class="tp-fact-icon">
                                            <span class="common-pale-yellow"><img
                                                    src="assets/img/dashboard/icon/fact/enroll-icon.svg"
                                                    alt="fact-icon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                        <div class="tp-fact-content">
                                            <h4 class="tp-fact-count">42</h4>
                                            <span>Completed Courses</span>
                                        </div>
                                        <div class="tp-fact-icon">
                                            <span class="common-pale-pacific"><img
                                                    src="assets/img/dashboard/icon/fact/cup.svg" alt="fact-icon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                        <div class="tp-fact-content">
                                            <h4 class="tp-fact-count">145</h4>
                                            <span>Total Students</span>
                                        </div>
                                        <div class="tp-fact-icon">
                                            <span class="common-pale-green"><img
                                                    src="assets/img/dashboard/icon/fact/students.svg"
                                                    alt="fact-icon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                        <div class="tp-fact-content">
                                            <h4 class="tp-fact-count">65</h4>
                                            <span>Total Courses</span>
                                        </div>
                                        <div class="tp-fact-icon">
                                            <span class="common-pale-blue"><img
                                                    src="assets/img/dashboard/icon/fact/course-total.svg"
                                                    alt="fact-icon"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="tp-fact-item d-flex align-items-center justify-content-between">
                                        <div class="tp-fact-content">
                                            <h4 class="tp-fact-count">26</h4>
                                            <span>Total Earnings</span>
                                        </div>
                                        <div class="tp-fact-icon">
                                            <span class="common-pale-purple"><img
                                                    src="assets/img/dashboard/icon/fact/card-pos.svg"
                                                    alt="fact-icon"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- fact-area-end -->



                    </div>
                    <!-- dashboard-content-area-end -->
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
