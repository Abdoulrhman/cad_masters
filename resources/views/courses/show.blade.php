@extends('layouts.dashboard')

@section('content')

<!-- course details breadcrumb start -->
<section class="tp-breadcrumb__area pt-25 pb-55 p-relative z-index-1 fix">
    <div class="tp-breadcrumb__bg" data-background="assets/img/breadcrumb/breadcrumb-bg-2.jpg"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="tp-breadcrumb__content">

                    <div class="tp-course-details-2-header">
                        <span
                            class="tp-course-details-2-category">{{ $course->category ? $course->category->name : 'Uncategorized' }}</span>
                        <h3 class="tp-course-details-2-title">{{ $course->name }}</h3>
                        <div class="tp-course-details-2-meta-wrapper d-flex align-items-center flex-wrap">
                            <div class="tp-course-details-2-meta ">
                                <div class="tp-course-details-2-author d-flex align-items-center">
                                    <div class="tp-course-details-2-author-avater">
                                        <img src="{{ $course->instructor && $course->instructor->image ? asset('storage/' . $course->instructor->image) : asset('assets/img/teacher/default.png') }}"
                                            alt="{{ $course->instructor ? $course->instructor->name : 'Instructor' }}">
                                    </div>
                                    <div class="tp-course-details-2-author-content">
                                        <span class="tp-course-details-2-author-designation">Instructor</span>
                                        <h3 class="tp-course-details-2-meta-title">
                                            {{ $course->instructor?->name ?? 'No Instructor' }}
                                            {{--{{ $course->instructor ? $course->instructor->name : 'Instructor' }}--}}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-course-details-2-meta">
                                <span class="tp-course-details-2-meta-subtitle">Category</span>
                                <h3 class="tp-course-details-2-meta-title">
                                    {{ $course->category ? $course->category->name : 'Uncategorized' }}</h3>
                            </div>
                            <div class="tp-course-details-2-meta text-end">
                                <div class="tp-course-details-2-meta-rating-wrapper">
                                    <div class="tp-course-rating-icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="tp-course-details-2-meta-subtitle">Review</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- course details breadcrumb end -->


<!-- course details area start -->
<section class="tp-course-details-2-area pt-50 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tp-course-details-2-main-inner pr-70">
                    <div class="tp-course-details-2-nav d-flex align-items-center">
                        <nav>
                            <ul id="course_details2_nav">
                                <li class="current"><a href="#info">Course Info</a></li>
                                <li class=""><a href="#curriculum">Content</a></li>
                                <li class=""><a href="#instructors">Instructors</a></li>
                                <li class=""><a href="#reviews">Reviews</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="tp-course-details-2-content">
                        <div id="info">
                            <h4 class="tp-course-details-2-main-title">About Course</h4>
                            <div class="tp-course-details-2-text mb-60">
                                <div class="content">
                                    <p>This course is aimed at people interested in UI/UX Design. We’ll start from the
                                        very <br>
                                        beginning and work all the way through, step by step. If you already have some
                                        UI/UX <br>
                                        Design experience but want to get up to speed using Adobe XD then this course is
                                        perfect <br>
                                        for you too!</p>
                                    <p>First, we will go over the differences between UX and UI Design. We will look at
                                        what our <br>
                                        brief for this real-world project is, then we will learn about low-fidelity
                                        wireframes and how <br>
                                        to make use of existing UI design kits.</p>
                                </div>
                                <a class="tp-course-details-showmore show-more-button"><span class="svg-icon">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 1V11" stroke="#3C66F9" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M1 6H11" stroke="#3C66F9" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span> Show more</a>
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

                        <div id="curriculum" class="pt-70">
                            <h4 class="tp-course-details-2-main-title">Course Content</h4>
                            <div class="tp-course-details-2-faq">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button d-flex justify-content-between"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseOne">
                                                <span class="span">Intro to Course and Histudy</span>
                                                <span class="lesson"></span>
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <div
                                                    class="tp-course-details-2-faq-item d-flex justify-content-between">
                                                    <div class="left"><span> <svg width="18" height="18"
                                                                viewBox="0 0 18 18" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">

                                                            </svg>{!! nl2br(e($course->description)) !!} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed d-flex justify-content-between"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                                aria-controls="panelsStayOpen-collapseTwo">
                                                <span class="span">Course Content PDF</span>
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div
                                                    class="tp-course-details-2-faq-item d-flex justify-content-between">
                                                    <div class="left"><span>
                                                            @if($course->outline_link)
                                                            <a href="{!! $course->outline_link !!}" target="_blank">
                                                                <img src="{{ asset('assets/img/breadcrumb/pdf-bg.png') }}"
                                                                    alt=""> Download the full course plan and outline in
                                                                PDF format
                                                            </a>
                                                            @else
                                                            <p>Course Outline will be available soon.</p>
                                                            @endif
                                                        </span>
                                                    </div>
                                                    {{--<div class="right">
                                              <span>20 min <a href="#"><svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <path d="M14.6808 4.83159C14.8936 5.13001 15 5.27922 15 5.5001C15 5.72097 14.8936 5.87018 14.6808 6.16861C13.7245 7.50949 11.2825 10.4001 8 10.4001C4.71755 10.4001 2.27547 7.50949 1.31923 6.16861C1.10641 5.87018 1 5.72097 1 5.5001C1 5.27922 1.10641 5.13001 1.31923 4.83159C2.27547 3.49071 4.71754 0.600098 8 0.600098C11.2825 0.600098 13.7245 3.49071 14.6808 4.83159Z" stroke="#5169F1" stroke-width="1.2" />
                                                          <path d="M10.0999 5.49985C10.0999 4.34005 9.1597 3.39985 7.9999 3.39985C6.8401 3.39985 5.8999 4.34005 5.8999 5.49985C5.8999 6.65965 6.8401 7.59985 7.9999 7.59985C9.1597 7.59985 10.0999 6.65965 10.0999 5.49985Z" stroke="#5169F1" stroke-width="1.2" />
                                                      </svg> Preview</a></span>
                                              </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="instructors" class="pt-100">
                            <h4 class="tp-course-details-2-main-title">Your Instructors</h4>
                            <div class="tp-course-details-2-instructor d-flex">
                                <div class="tp-course-details-2-instructor-thumb mr-40">
                                    <img style="height: 80px!important;width: 100px!important;"
                                        src="{{ $course->instructor && $course->instructor->image ? asset('storage/' . $course->instructor->image) : asset('assets/img/teacher/default.png') }}"
                                        alt="{{ $course->instructor ? $course->instructor->name : 'Instructor' }}">
                                </div>
                                <div class="tp-course-details-2-instructor-content">
                                    <h5>{{ $course->instructor ? $course->instructor->name : 'Instructor' }}"</h5>
                                    <span
                                        class="pre">{{ $course->instructor ? $course->instructor->title : 'Instructor' }}"</span>
                                    <div class="tp-course-details-2-instructor-text">
                                        <p>I am also the founder of a large local design organization, Salt Lake <br>
                                            Designers, where I and other local influencers help cultivate the talents
                                            <br>
                                            of up and coming UX designers through workshops and panel discussions.
                                        </p>
                                        <p>Undon Xie is a brilliant educator, whose life was spent for computer <br>
                                            science and love of nature.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="reviews">
                            <h4 class="tp-course-details-2-main-title">Ratings & Reviews</h4>
                            <div class="tp-course-details-2-review-rating">
                                <div class="row gx-2">
                                    <div class="col-lg-12 justify-content-center">
                                        <div class="tp-course-details-2-review-details">
                                            <div class="tp-course-details-2-review-content">
                                                <div class="left"><span>
                                                        @if($course->youtube_link)
                                                        <iframe width="100%" height="300px"
                                                            src="{{$course->youtube_link}}  "
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            referrerpolicy="strict-origin-when-cross-origin"
                                                            allowfullscreen></iframe>
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
                            <del>${{$course->price}} </del>
                            <span>Contact us for current discount </span>
                        </div>
                        <div class="tp-course-details-2-widget-btn">
                            <a class="active" href="{{ route('courses.register', $course) }}"
                                target="_blank">Register</a>
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
                                            <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> Duration</span>
                                    <span>{{$course->hours}} Hours</span>
                                </div>
                                <div
                                    class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                    <span> <svg width="11" height="14" viewBox="0 0 11 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 13V5.5" stroke="#4F5158" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10 13V1" stroke="#4F5158" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M1 13V10" stroke="#4F5158" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg> Skill Level</span>
                                    <span>Beginner</span>
                                </div>




                                @if($course->sessions && count($course->sessions) > 0)
                                @foreach($course->sessions as $session)
                                <!-- Start Date -->
                                <div
                                    class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                    <span>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M1.06836 6.18286H13.5451" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M10.4102 8.91675H10.4194" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M7.30273 8.91675H7.312" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M4.1875 8.91675H4.19676" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M10.4102 11.6375H10.4194" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M7.30273 11.6375H7.312" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M4.1875 11.6375H4.19676" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.1289 1V3.30355" stroke="#4F5158" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M4.47656 1V3.30355" stroke="#4F5158" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.2668 2.10535H4.33967C2.28399 2.10535 1 3.2505 1 5.35547V11.6902C1 13.8283 2.28399 14.9999 4.33967 14.9999H10.2603C12.3225 14.9999 13.6 13.8481 13.6 11.7432V5.35547C13.6065 3.2505 12.329 2.10535 10.2668 2.10535Z"
                                                stroke="#4F5158" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        Start {{ $loop->iteration }} Date
                                    </span>
                                    <span>{{ \Carbon\Carbon::parse($session->start_date)->format('d M Y') }}</span>
                                </div>

                                <!-- End Date -->
                                <div
                                    class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                    <span>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M1.06836 6.18286H13.5451" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M10.4102 8.91675H10.4194" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M7.30273 8.91675H7.312" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M4.1875 8.91675H4.19676" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M10.4102 11.6375H10.4194" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M7.30273 11.6375H7.312" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M4.1875 11.6375H4.19676" stroke="#4F5158"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.1289 1V3.30355" stroke="#4F5158" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M4.47656 1V3.30355" stroke="#4F5158" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M10.2668 2.10535H4.33967C2.28399 2.10535 1 3.2505 1 5.35547V11.6902C1 13.8283 2.28399 14.9999 4.33967 14.9999H10.2603C12.3225 14.9999 13.6 13.8481 13.6 11.7432V5.35547C13.6065 3.2505 12.329 2.10535 10.2668 2.10535Z"
                                                stroke="#4F5158" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        End {{ $loop->iteration }} Date
                                    </span>
                                    <span>{{ \Carbon\Carbon::parse($session->end_date)->format('d M Y') }}</span>
                                </div>
                                @endforeach
                                @else
                                <div
                                    class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                    <span>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <!-- Your SVG calendar icon -->
                                        </svg>
                                        Start Date
                                    </span>
                                    <span>No sessions scheduled</span>
                                </div>
                                @endif
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
                            <span>{{ $relatedCourse->category ? $relatedCourse->category->name : 'Uncategorized' }}</span>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info text-center">
                    No related courses available at the moment.
                </div>
            </div>

        </div>
        @endif
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
