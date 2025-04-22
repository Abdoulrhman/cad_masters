@extends('layouts.dashboard')

@section('content')
<!-- Course Details Main Area -->
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
                                <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab"
                                    data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum"
                                    aria-selected="false">Curriculum</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="instructor-tab" data-bs-toggle="tab"
                                    data-bs-target="#instructor" type="button" role="tab" aria-controls="instructor"
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
</section>
@endsection

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
