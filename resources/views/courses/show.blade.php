@extends('layouts.dashboard')

@section('content')

<!-- course details breadcrumb start -->
<section class="tp-breadcrumb__area pt-25 pb-15 p-relative z-index-1 fix">
    <div class="tp-breadcrumb__bg" data-background="assets/img/breadcrumb/breadcrumb-bg-2.jpg"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="tp-breadcrumb__content">

                    <div class="tp-course-details-2-header">
                        <span class="tp-course-details-2-category">
                            @forelse($course->categories as $cat)
                                <span>{{ $cat->name }}</span>@if(!$loop->last), @endif
                            @empty
                                <span>Uncategorized</span>
                            @endforelse
                                </span>
                        <h3 class="tp-course-details-2-title">{{ $course->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- course details breadcrumb end -->


<!-- course details area start -->
<section class="tp-course-details-2-area pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tp-course-details-2-main-inner pr-70">

                    <div class="tp-course-details-2-content">
                        <div id="info">
                            <h4 class="tp-course-details-2-main-title">About Course</h4>
                            <div class="tp-course-details-2-text mb-60">
                                <div class="content">
                                    <p>{!! $course->description !!}</p>
                                </div>
                            </div>
                            <h4 class="tp-course-details-2-main-title">What will you Learn?</h4>
                            <div class="tp-course-details-2-list">
                                <ul>
                                    <li>Become a UX designer.</li>
                                    <li>Filming 101</li>
                                    <li>Learn to design websites.</li>
                                    <li>Tools you need for best results.</li>
                                    <li>How to plan for a video idea</li>
                                    <li>How to use premade UI kits.</li>
                                    <li>Differences between ads, trailers, vlogs,etc</li>
                                </ul>
                                <p>With this course, you also have access to a whole lot of resources not only for
                                    reference but
                                    also free media like aerial video shots, background music, fonts, and more.</p>
                            </div>
                        </div>
                        <br>
                        <!-- course-area-start -->



                        <br>
                        <!-- course-area-start -->

                        <ul class="tpd-table-list">
                            <!-- Table Header -->
                            <li class="tpd-table-head" style="background: #4fb469!important;">
                                <div class="tpd-table-row">
                                    <div class="tpd-quiz-info">
                                        <h4 class="tpd-table-title">Start & End Date</h4>
                                    </div>
                                    <div class="tpd-quiz-ques">
                                        <h4 class="tpd-table-title">Schedule</h4>
                                    </div>
                                    <div class="tpd-quiz-tm">
                                        <h4 class="tpd-table-title">Branch</h4>
                                    </div>
                                    <div class="tpd-quiz-ca">
                                        <h4 class="tpd-table-title">Price / Offer</h4>
                                    </div>
                                    <div class="tpd-quiz-details">
                                        <h4 class="tpd-table-title">Register NOW</h4>
                                    </div>
                                </div>
                            </li>

                                @if($course->sessions->count() > 0)
                                    @foreach($course->sessions as $session)
                                        <li>
                                            <div class="tpd-table-row">
                                                <div class="tpd-quiz-info">
                                                    <span class="tpd-common-date">
                                                        {{ $session->start_date->format('F j, Y') }}
                                                    </span>
                                                                                    <br>
                                                    <span class="tpd-common-date">
                                                        {{ $session->end_date->format('F j, Y') }}
                                                    </span>
                                                 </div>

                                                <div class="tpd-quiz-ques">
                                                    <span class="tpd-common-text">
                                                        @if(!empty($course->daysInWeek))
                                                            {{ $course->daysInWeek }}
                                                        @else
                                                            There is No Days Scheduled
                                                        @endif
                                                    </span>
                                                </div>

                                                <div class="tpd-quiz-tm">
                                                    <h4 class="tpd-table-title">
                                                        @if($session->branch)
                                                            {{ $session->branch->name }}
                                                            @if($session->branch->location)
                                                                <br><small>{{ $session->branch->location }}</small>
                                                            @endif
                                                        @else
                                                            no Online
                                                        @endif
                                                    </h4>
                                                </div>
                                                <div class="tpd-quiz-ca">
                                                    <h4 class="tpd-table-title">
                                                        @if($course->price_offer)
                                                            <del>${{ number_format($course->price, 2) }}</del>
                                                            <br>
                                                            <span style="font-size: 12px"> Contact us for discount </span>
                                                        @else
                                                            ${{ number_format($course->price, 2) }}
                                                        @endif
                                                    </h4>
                                                </div>
                                            <div class="tpd-quiz-details">
                                                <div class="tpd-quiz-details-box d-flex">
                                                    <div class="tpd-quiz-details-btn mr-15">
                                                        <a class="tpd-border-btn"
                                                           href="{{ route('courses.register', $course) }}" target="_blank">
                                                            Register
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <li>
                                    <div class="tpd-table-row">
                                        <div class="tpd-quiz-info" colspan="5">
                                            <span class="tpd-common-text">No sessions available yet</span>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        </ul>

                        <div id="instructors" class="pt-100">
                            <h4 class="tp-course-details-2-main-title">Your Instructors</h4>

                            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                 aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    @if($course->instructors->count() > 0)
                                        @foreach($course->instructors as $instructor)
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="tp-shop-product-item text-center mb-50">
                                                    <div class="tp-shop-product-thumb p-relative">
                                                        <a href="{{ $instructor->image ? asset('storage/' . $instructor->image) : asset('assets/img/teacher/default.png') }}">
                                                            <img src="{{ $instructor->image ? asset('storage/' . $instructor->image) : asset('assets/img/teacher/default.png') }}"
                                                                 style="max-width: 160px; max-height: 160px; min-width: 160px;min-height: 160px;"
                                                                 alt="{{ $instructor->name }}">
                                                        </a>
                                                        <h5 class="pt-20">{{ $instructor->name }}</h5>
                                                    </div>
                                                    <div class="tp-shop-product-content">
                                                        <!-- Additional instructor info can go here -->
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <div class="alert alert-info">No instructors assigned yet.</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                             aria-labelledby="pills-profile-tab">
                            <h4 class="tp-course-details-2-main-title">Certificates</h4>

                            <div class="row">
                                @if($course->certificates->count() > 0)
                                    @foreach($course->certificates as $certificate)
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="tp-shop-product-item text-center">
                                                <div class="tp-shop-product-thumb p-relative">
                                                    <a href="{{ asset('storage/'.$certificate->image) }}" data-lightbox="certificates" target="_blank">
                                                        <img src="{{ asset('storage/'.$certificate->image) }}"
                                                             class="img-fluid"
                                                             alt="{{ $course->name }} certificate">
                                                    </a>
                                                </div>
                                                <div class="tp-shop-product-content mt-2">
                                                    <a href="{{ asset('storage/'.$certificate->path) }}"
                                                       download="{{ Str::slug($course->name) }}-certificate-{{ $loop->iteration }}.jpg"
                                                       class="btn btn-sm btn-primary">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-12">
                                        <div class="alert alert-info">No certificates available yet.</div>
                                    </div>
                                @endif
                            </div>
                        </div>

        <div id="reviews">
            <h4 class="tp-course-details-2-main-title"> Reviews</h4>
            <div class="tp-course-details-2-review-rating">
                <div class="row gx-2">
                    <div class="col-lg-12 justify-content-center">
                        <div class="tp-course-details-2-review-details">
                            <div class="tp-course-details-2-review-content">
                                <div class="left"><span>
                                        @if($course->youtube_link)
                                        <iframe width="100%" height="300px" src="{{$course->youtube_link}}  "
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        @else
                                        <p>Course Review will be available soon.</p>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
        <div class="tp-course-details-2-widget">
            <div class="tp-course-details-2-widget-thumb p-relative">
                <img src="{{ $course->image ? asset('storage/' . $course->image) : asset('assets/img/course/details/course.jpg') }}"
                    alt="{{ $course->name }}">
            </div>
            <div class="tp-course-details-2-widget-content">
                <div class="tp-course-details-2-widget-price">

                    <span> {{ $course->name }} </span>
                </div>
                <div class="tp-course-details-2-widget-btn">
                    <a class="active" href="{{ route('courses.register', $course) }}" target="_blank">Register</a>
                </div>

                <div class="tp-course-details-2-widget-list">
                    <h5>This course includes:</h5>

                    <div class="tp-course-details-2-widget-list-item-wrapper">
                        <div
                            class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                            <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z"
                                        stroke="#4F5158" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#4F5158" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg> Duration</span>
                            <span>{{$course->hours}} Hours</span>
                        </div>
                        <div
                            class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                            <span> <svg width="11" height="14" viewBox="0 0 11 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 13V5.5" stroke="#4F5158" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 13V1" stroke="#4F5158" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M1 13V10" stroke="#4F5158" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg> Skill Level</span>
                            <span>Beginner</span>
                        </div>

                        <div
                            class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                            <span>
                                @if($course->outline_link)
                                <a href="{!! $course->outline_link !!}" target="_blank">
                                    <img src="{{ asset('assets/img/breadcrumb/pdf-bg.png') }}"
                                        style="width: 50px!important;height: 50px!important;" alt=""> <a
                                        href="{!! $course->outline_link !!}" target="_blank"></a> Download Course
                                    Content
                                </a>
                                @else
                                <p>Course Outline will be available soon.</p>
                                @endif
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- course details area end -->


<!-- course details area start -->
<section class="tp-course-details-2-related-area pb-80">
    <div class="container">
        <div class="tp-course-details-2-related-border"></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-course-details-2-related-heading pt-80">
                    <h3 class="tp-course-details-2-related-title">Related Courses</h3>
                </div>
            </div>
        </div>
        @if($relatedCourses->count() > 0)
        <div class="row">
            @foreach($relatedCourses as $relatedCourse)
            <div class="col-lg-4 col-md-6">
                <div class="tp-course-item p-relative fix mb-30">
                    <div class="tp-course-thumb">
                        <a href="{{ route('courses.show', $relatedCourse->id) }}">
                            <img class="course-pink"
                                src="{{ $relatedCourse->image ? asset('storage/'.$relatedCourse->image) : asset('assets/img/course/course-thumb-5.jpg') }}"
                                alt="{{ $relatedCourse->name }}">
                        </a>
                    </div>
                    <div class="tp-course-content">
                        <div class="tp-course-tag mb-10">
                            <span class="tp-course-details-2-category">
                                @forelse($relatedCourse->categories as $cat)
                                    <span>{{ $cat->name }}</span>@if(!$loop->last), @endif
                                @empty
                                    <span>Uncategorized</span>
                                @endforelse
                            </span>
                        </div>
                        <h4 class="tp-course-title">
                            <a href="{{ route('courses.show', $relatedCourse->id) }}">
                                {{ $relatedCourse->name }}
                            </a>
                        </h4>
                    </div>
                    <div class="tp-course-btn">
                        <a href="{{ route('courses.show', $relatedCourse->id) }}">Preview this Course</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="alert alert-info text-center py-4">
            <i class="fas fa-info-circle me-2"></i> No related courses found in this category.
        </div>
        @endif
        {{--<div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="tp-course-item p-relative fix mb-30">
                    <div class="tp-course-thumb">
                        <a href="course-details-2.html"><img class="course-pink" src="assets/img/course/course-thumb-5.jpg" alt=""></a>
                    </div>
                    <div class="tp-course-content">
                        <div class="tp-course-tag mb-10">
                            <span>{{ $course->category ? $course->category->name : 'Uncategorized' }}</span>
    </div>
    <h4 class="tp-course-title">
        <a href="course-details-2.html">The complete guide to build <br> restful API application</a>
    </h4>
    </div>
    <div class="tp-course-btn">
        <a href="course-details-2.html">Preview this Course</a>
    </div>
    </div>
    </div>
    </div>--}}
    </div>
</section>
<!-- course details area end -->


{{--<!-- Course Details Main Area -->
<section class="course-details-area pt-120 pb-100">
    <div class="container">
        <!-- Course Title Area -->
        <div class="course-details-header mb-40">
            <div class="row align-items-center">
                <div class="col-xl-8">
                    <div class="course-details-title-wrapper">
                        <h2 class="course-details-title">{{ $course->title }}</h2>
<div class="course-details-meta">
    <div class="course-category-tag">
        <a href="#">{{ $course->category ? $course->category->name : 'Uncategorized' }}</a>
    </div>
    <div class="course-details-rating">
        <div class="course-rating-stars">
            @for($i = 1; $i <= 5; $i++) <i
                class="fas fa-star {{ $i <= $course->rating ? 'text-warning' : 'text-muted' }}">
                </i>
                @endfor
        </div>
        <span class="rating-count">({{ number_format($course->rating, 1) }})</span>
    </div>
</div>
</div>
</div>
<div class="col-xl-4">
    <div class="course-details-price text-xl-end">
        @if($course->price > 0)
        <span class="price-now">${{ number_format($course->price, 2) }}</span>
        @else
        <span class="price-free">Free</span>
        @endif
    </div>
</div>
</div>
</div>

<div class="row">
    <div class="col-xl-8 col-lg-7">
        <!-- Course Image with improved container -->
        <div class="course-details-img mb-30">
            <div class="image-container">
                <img src="{{ $course->image ? asset('storage/' . $course->image) : asset('assets/img/course/default.jpg') }}"
                    alt="{{ $course->title }}" class="img-fluid rounded">
            </div>
        </div>

        <!-- Course Description -->
        <div class="course-details-content mb-30">
            <div class="course-details-tab">
                <ul class="nav nav-tabs" id="courseTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                            data-bs-target="#description" type="button" role="tab" aria-controls="description"
                            aria-selected="true">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum"
                            type="button" role="tab" aria-controls="curriculum"
                            aria-selected="false">Curriculum</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor"
                            type="button" role="tab" aria-controls="instructor"
                            aria-selected="false">Instructor</button>
                    </li>
                </ul>
                <div class="tab-content" id="courseTabContent">
                    <!-- Description Tab -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="course-description">
                            {!! nl2br(e($course->description)) !!}
                        </div>
                    </div>
                    <!-- Curriculum Tab -->
                    <div class="tab-pane fade" id="curriculum" role="tabpanel">
                        <div class="course-curriculum">
                            <h4>Course Content</h4>
                            <div class="curriculum-content">
                                @if($course->curriculum)
                                {!! $course->curriculum !!}
                                @else
                                <p>Course curriculum will be available soon.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Instructor Tab -->
                    <div class="tab-pane fade" id="instructor" role="tabpanel">
                        <div class="course-instructor">
                            <div class="instructor-profile d-flex align-items-center">
                                <div class="instructor-thumb">
                                    <img src="{{ $course->instructor && $course->instructor->image ? asset('storage/' . $course->instructor->image) : asset('assets/img/teacher/default.png') }}"
                                        alt="{{ $course->instructor ? $course->instructor->name : 'Instructor' }}"
                                        class="rounded-circle">
                                </div>
                                <div class="instructor-content">
                                    <h4>{{ $course->instructor ? $course->instructor->name : 'Instructor' }}
                                    </h4>
                                    <span>Course Instructor</span>
                                    @if($course->instructor && $course->instructor->bio)
                                    <p class="mt-3">{{ $course->instructor->bio }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Sidebar -->
    <div class="col-xl-4 col-lg-5">
        <div class="course-details-sidebar">
            <div class="course-features-list mb-30">
                <h4>Course Features</h4>
                <ul>
                    <li>
                        <i class="fas fa-users"></i>
                        <span>Enrolled:</span>
                        <span class="value">{{ $course->students_count ?? 0 }} students</span>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span>Duration:</span>
                        <span class="value">{{ $course->duration ?? $course->hours }} hours</span>
                    </li>
                    <li>
                        <i class="fas fa-book"></i>
                        <span>Lectures:</span>
                        <span class="value">{{ $course->lectures_count ?? 0 }}</span>
                    </li>
                    <li>
                        <i class="fas fa-certificate"></i>
                        <span>Certificate:</span>
                        <span class="value">Yes</span>
                    </li>
                    @if($course->level)
                    <li>
                        <i class="fas fa-signal"></i>
                        <span>Level:</span>
                        <span class="value">{{ ucfirst($course->level) }}</span>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="course-enroll-btn">
                <a href="{{ route('courses.register', $course) }}" class="tp-btn w-100">
                    <i class="fas fa-user-plus"></i> Enroll Now
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</section>--}}


@push('styles')
<style>
.course-details-area {
    background-color: #f8f9fa;
}

.course-details-header {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.course-details-title {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #222;
}

.course-details-meta {
    display: flex;
    align-items: center;
    gap: 20px;
}

.course-category-tag a {
    background: #e9ecef;
    color: #495057;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 14px;
    text-decoration: none;
    transition: all 0.3s;
}

.course-category-tag a:hover {
    background: #dee2e6;
}

.course-details-rating {
    display: flex;
    align-items: center;
    gap: 10px;
}

.course-rating-stars {
    color: #ffc107;
}

.course-details-img .image-container {
    width: 100%;
    height: 400px;
    overflow: hidden;
    border-radius: 8px;
    position: relative;
}

.course-details-img .image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.course-details-content {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.course-details-tab .nav-tabs {
    border-bottom: 2px solid #dee2e6;
    margin-bottom: 20px;
}

.course-details-tab .nav-link {
    border: none;
    color: #6c757d;
    font-weight: 600;
    padding: 10px 20px;
    margin-right: 10px;
    position: relative;
}

.course-details-tab .nav-link.active {
    color: #0d6efd;
    background: none;
}

.course-details-tab .nav-link.active::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #0d6efd;
}

.course-details-sidebar {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    position: sticky;
    top: 20px;
}

.course-features-list h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #222;
}

.course-features-list ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.course-features-list ul li {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 0;
    border-bottom: 1px solid #dee2e6;
}

.course-features-list ul li:last-child {
    border-bottom: none;
}

.course-features-list ul li i {
    color: #0d6efd;
    margin-right: 10px;
}

.course-enroll-btn {
    margin-top: 20px;
}

.price-now {
    font-size: 32px;
    font-weight: 700;
    color: #0d6efd;
}

.price-free {
    font-size: 32px;
    font-weight: 700;
    color: #198754;
}

.instructor-profile {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
}

.instructor-thumb img {
    width: 80px;
    height: 80px;
    object-fit: cover;
}

.instructor-content h4 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
}

.instructor-content span {
    color: #6c757d;
}

.course-description {
    line-height: 1.6;
    color: #4a5568;
}

.course-description p {
    margin-bottom: 1rem;
}

.curriculum-content {
    margin-top: 20px;
}

.tp-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 24px;
    font-weight: 600;
    text-align: center;
    text-decoration: none;
    border-radius: 6px;
    transition: all 0.3s ease;
    background-color: #0d6efd;
    color: #fff;
    border: none;
    gap: 8px;
}

.tp-btn:hover {
    background-color: #0b5ed7;
    color: #fff;
    transform: translateY(-1px);
}

@media (max-width: 991px) {
    .course-details-sidebar {
        margin-top: 30px;
        position: static;
    }
}

@media (max-width: 767px) {
    .course-details-title {
        font-size: 24px;
    }

    .course-details-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }

    .course-details-price {
        text-align: left !important;
        margin-top: 15px;
    }
}
</style>
@endpush
@endsection
