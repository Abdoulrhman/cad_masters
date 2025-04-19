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
                        <div class="tp-course-details-area pb-90">
                            <!-- Breadcrumb -->
                            <div class="tp-breadcrumb__content mb-40">
                                <div class="tp-breadcrumb__list">
                                    <span><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a></span>
                                    <span><a href="{{ route('courses.index') }}">Courses</a></span>
                                    <span class="color">{{ $course->title }}</span>
                                </div>
                            </div>

                            <!-- Course Header -->
                            <div class="course-details-banner mb-40">
                                <div class="course-details-wrapper">
                                    <div class="course-details-thumb">
                                        <img src="{{ $course->image ? asset('storage/' . $course->image) : asset('assets/img/course/default.jpg') }}"
                                            alt="{{ $course->title }}">
                                    </div>
                                    <div class="course-details-banner-content">
                                        <div class="course-details-banner-top">
                                            <div class="course-details-category">
                                                <span>{{ $course->category->name }}</span>
                                            </div>
                                            <div class="course-details-price">
                                                @if($course->price > 0)
                                                <span>${{ number_format($course->price, 2) }}</span>
                                                @else
                                                <span>Free</span>
                                                @endif
                                            </div>
                                        </div>
                                        <h3 class="course-details-banner-title">{{ $course->title }}</h3>
                                        <div class="course-details-banner-meta">
                                            <div class="course-details-banner-rating">
                                                <div class="course-details-banner-rating-icon">
                                                    @for($i = 1; $i <= 5; $i++) <i
                                                        class="fa-solid fa-star {{ $i <= $course->rating ? 'text-warning' : 'text-muted' }}">
                                                        </i>
                                                        @endfor
                                                </div>
                                                <div class="course-details-banner-rating-text">
                                                    <span>{{ number_format($course->rating, 1) }} /5</span>
                                                </div>
                                            </div>
                                            <div class="course-details-banner-enrolled">
                                                <span><i class="fas fa-users"></i> {{ $course->students_count ?? 0 }}
                                                    Students</span>
                                            </div>
                                            <div class="course-details-banner-duration">
                                                <span><i class="fas fa-book"></i> {{ $course->hours }} Hours</span>
                                            </div>
                                        </div>
                                        <!-- Register Button -->
                                        <div class="course-details-banner-button mt-30">
                                            <a href="{{ route('courses.register', $course) }}" class="tp-btn">
                                                <i class="fas fa-user-plus"></i> Register for this Course
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Content -->
                            <div class="course-details-content">
                                <div class="course-details-tab">
                                    <div class="course-details-tab-content">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="description">
                                                <div class="course-details-description">
                                                    <h4 class="course-details-title">Course Description</h4>
                                                    <p>{{ $course->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Instructor -->
                            <div class="course-details-instructor mt-40">
                                <h4 class="course-details-title">Course Instructor</h4>
                                <div class="course-instructor-wrapper">
                                    <div class="course-instructor-img">
                                        <img src="{{ $course->instructor_image ?? 'assets/img/teacher/default.png' }}"
                                            alt="{{ $course->instructor_name }}">
                                    </div>
                                    <div class="course-instructor-content">
                                        <h4>{{ $course->instructor_name }}</h4>
                                        <span>Course Instructor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('styles')
<style>
.course-details-banner {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
}

.course-details-thumb img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

.course-details-banner-content {
    padding: 30px;
}

.course-details-banner-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.course-details-category span {
    background: #f0f4ff;
    color: #5169f1;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 14px;
}

.course-details-price span {
    font-size: 24px;
    font-weight: 600;
    color: #5169f1;
}

.course-details-banner-title {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
}

.course-details-banner-meta {
    display: flex;
    gap: 30px;
    margin-top: 20px;
}

.course-details-banner-rating {
    display: flex;
    align-items: center;
    gap: 10px;
}

.course-details-banner-rating-text span {
    color: #666;
}

.course-details-banner-enrolled,
.course-details-banner-duration {
    color: #666;
}

.course-details-content {
    background: #fff;
    border-radius: 10px;
    padding: 30px;
    margin-top: 30px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
}

.course-details-title {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.course-details-description p {
    color: #666;
    line-height: 1.6;
}

.course-details-instructor {
    background: #fff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
}

.course-instructor-wrapper {
    display: flex;
    align-items: center;
    gap: 20px;
}

.course-instructor-img img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.course-instructor-content h4 {
    font-size: 20px;
    margin-bottom: 5px;
    color: #333;
}

.course-instructor-content span {
    color: #666;
}

.course-details-banner-button {
    text-align: center;
}

.course-details-banner-button .tp-btn {
    padding: 15px 30px;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.course-details-banner-button .tp-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(81, 105, 241, 0.3);
}

.course-details-banner-button i {
    font-size: 18px;
}
</style>
@endpush
