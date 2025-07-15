@extends('layouts.dashboard')

@section('title')
{{ $course->name }}

    @endsection

@section('content')

<!-- course details breadcrumb start -->
<section class="tp-breadcrumb__area pt-15 pb-15 p-relative z-index-1 fix" style="padding-top: 20px!important; padding-bottom: 200px!important;">
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
                        <h3 class="tp-course-details-2-title mb-3" style="text-align: center !important;">{{ $course->name }}</h3>
                        <div class="tp-course-details-2-widget-thumb p-relative d-flex justify-content-center">
                            <img style="width: 75%" src="{{ $course->image ? asset('storage/' . $course->image) : asset('assets/img/course/details/course.jpg') }}"
                                 alt="{{ $course->name }}">
                        </div>
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
                            <div class="tp-course-details-2-text mb-20">
                                <div class="content">
                                    <p>{!! $course->description !!}</p>
                                </div>
                            </div>
                        </div>
                        <!-- course-area-start -->

{{--<div class="table-responsive mt-4 mb-5">
  <table class="table table-bordered table-hover align-middle">
    <thead class="table-success text-center" style="background-color: #198754!important;width: 100px!important;">
      <tr>
        <th class="" style="color: white!important;" scope="col">Start & End Date</th>
        <th style="color: white!important;" scope="col">Schedule</th>
        <th style="color: white!important;" scope="col">Branch</th>
        <th style="color: white!important;" scope="col">Price / Offer</th>
        <th style="color: white!important;" scope="col">Register NOW</th>
      </tr>
    </thead>
    <tbody class="text-center">
      @if($course->sessions->count() > 0)
        @foreach($course->sessions as $session)
          <tr>
            <td>
              <div>{{ $session->start_date->format('F j, Y') }}</div>
              <div class="text-muted small">{{ $session->end_date->format('F j, Y') }}</div>
            </td>
            <td>
              @if(!empty($course->daysInWeek))
                {{ $course->daysInWeek }}
              @else
                <span class="text-muted small">No Days Scheduled</span>
              @endif
            </td>
            <td>
              @if($session->branch)
                {{ $session->branch->name }}
                @if($session->branch->location)
                  <div class="text-muted small">{{ $session->branch->location }}</div>
                @endif
              @else
                <span class="text-muted small">no Online</span>
              @endif
            </td>
            <td>
              @if($course->price_offer)
                <span class="text-decoration-line-through text-muted me-1">EG{{ number_format($course->price, 2) }}</span>
                <div class="small text-success">Contact us for discount</div>
              @else
                EG{{ number_format($course->price, 2) }}
              @endif
            </td>
            <td>
              <a class="btn btn-success btn-sm fw-bold" href="{{ route('courses.register', $course) }}" target="_blank">Register</a>
            </td>
          </tr>
        @endforeach
      @else
        <tr>
          <td colspan="5" class="text-center text-muted">No sessions available yet</td>
        </tr>
      @endif
    </tbody>
  </table>
</div>--}}

                        <div class="table-responsive mt-4 mb-5">
                            <h4 class="tp-course-details-2-main-title pb-15"> Public Calender</h4>
                            <table class="table table-bordered table-hover align-middle" >
                                <thead class="table-success text-center" style="background-color: #198754!important;">
                                <tr>
                                    <th  style="color: white!important;">Start & End Date</th>
                                    <th  style="color: white!important;">Days</th>
                                    <th  style="color: white!important;">Branch</th>
                                    <th  style="color: white!important;">Price / Offer</th>
                                    <th  style="color: white!important;">Register NOW</th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                @if($course->sessions->count() > 0)
                                    @foreach($course->sessions as $session)
                                        <tr>
                                            <td class="text-center" style="min-width: 100px;">
                                                <div class="d-flex flex-column">
                                                    <span>{{ $session->start_date->format('M j, Y') }}</span>
                                                    <span class="">{{ $session->end_date->format('M j, Y') }}</span>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                @if(!empty($course->daysInWeek))
                                                    {{ $course->daysInWeek }}
                                                @else
                                                    <span class="text-muted small">No Days Scheduled</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if($session->branch)
                                                    <div class="d-flex flex-column">
                                                        <span>{{ $session->branch->name }}</span>
                                                        @if($session->branch->location)
                                                            <span class="text-muted small">{{ $session->branch->location }}</span>
                                                        @endif
                                                    </div>
                                                @else
                                                    <span class="text-muted small">Online</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex flex-column">
                                                    @if($course->price_offer)
                                                        <span class="text-decoration-line-through text-muted">EG{{ number_format($course->price, 2) }}</span>
                                                        <span class="small text-success">Contact us for discount</span>
                                                    @else
                                                        <span>EG{{ number_format($course->price, 2) }}</span>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-success btn-sm fw-bold" href="{{ route('courses.register', $course) }}" target="_blank">Register</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">No sessions available yet</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
<!-- end new Bootstrap table -->

                        <div id="instructors" class="pt-20">
                            <h4 class="tp-course-details-2-main-title">Course Instructors</h4>

                            <div class="tab-pane fade show active pt-25" id="pills-profile" role="tabpanel"
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
                            <h4 class="tp-course-details-2-main-title">Course Certificates</h4>

                            <div class="row">
                                @if($course->certificates->count() > 0)
                                    @foreach($course->certificates as $certificate)
                                        <div class="col-lg-4 col-md-6 mb-4 pt-25">
                                            <div class="tp-shop-product-item text-center">
                                                <div class="tp-shop-product-thumb p-relative">
                                                    <a href="{{ asset('storage/'.$certificate->image) }}" data-lightbox="certificates" target="_blank">
                                                        <img src="{{ asset('storage/'.$certificate->image) }}"
                                                             class="img-fluid"
                                                             alt="{{ $course->name }} certificate">
                                                    </a>
                                                </div>
                                                <div class="tp-shop-product-content mt-2">
                                                    {{--<a href="{{ asset('storage/'.$certificate->path) }}"
                                                       download="{{ Str::slug($course->name) }}-certificate-{{ $loop->iteration }}.jpg"
                                                       class="btn btn-sm btn-primary">
                                                        <i class="fas fa-download me-1"></i> Download
                                                    </a>--}}
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
            <h4 class="tp-course-details-2-main-title pb-15"> Reviews</h4>
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
            {{--<div class="tp-course-details-2-widget-thumb p-relative">
                <img src="{{ $course->image ? asset('storage/' . $course->image) : asset('assets/img/course/details/course.jpg') }}"
                    alt="{{ $course->name }}">
            </div>--}}
            <div class="tp-course-details-2-widget-content">
               {{-- <div class="tp-course-details-2-widget-price">

                    <span> {{ $course->name }} </span>
                </div>--}}
                <div class="tp-course-details-2-widget-btn">
                    <a class="active" href="{{ route('courses.register', $course) }}" target="_blank">Register</a>
                </div>

                <div class="tp-course-details-2-widget-list">

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

                   {{-- <h5>This course includes:</h5>

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
                        </div>--}}

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
    </div>
</section>
<!-- course details area end -->




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
@media (max-width: 400px) {
    .table-responsive table {
        font-size: 14px;
    }
    .btn-sm {
        padding: 0.15rem 0.5rem;
        font-size: 12px;
    }
}
</style>
@endpush
@endsection
