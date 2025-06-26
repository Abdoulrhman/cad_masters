@extends('layouts.dashboard')

@section('title')
    Electrical
    @endsection

    @section('content')
            <!-- undergraduate breadcrumb start -->
    <section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
        <div class="tp-breadcrumb__bg overlay"
             style="background: url('{{ asset('/assets/img/breadcrumb/Contact-Us.PNG') }}') no-repeat center / cover !important"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="tp-breadcrumb__content">
                        <h3 class="tp-breadcrumb__title color">Electrical Courses</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- undergraduate breadcrumb end -->

    <!-- Courses Section  Start -->
    <!-- Courses Section Start -->
    <section class="course-area tp-course-wrapper mt-100 mb-100">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-5 col-xl-6 col-lg-7">
                    <div class="tp-section mb-40">
                        <h3 class="tp-section-3-title">Electrical
                        <span>Courses
                            <img class="tp-underline-shape-6 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s"
                                 src="assets/img/unlerline/course-2-svg-1.svg" alt="">
                        </span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content wow fadeInUp" data-wow-delay=".3s" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab"
                             tabindex="0">
                            <div class="row">
                                @if($courses->count() > 0)
                                    @foreach($courses as $course)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-course-item p-relative fix mb-30">
                                                <div class="tp-course-thumb">
                                                    <a href="{{ route('courses.show', $course) }}">
                                                        <img class="course-pink" src="{{ asset('storage/' . $course->image) }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="tp-course-content">
                                                    <div class="tp-course-tag mb-10">
                                                        @foreach($course->categories as $category)
                                                            <span>{{ $category->name }}</span>
                                                            @if(!$loop->last), @endif
                                                        @endforeach
                                                    </div>
                                                    <h4 class="tp-course-title">
                                                        <a href="{{ route('courses.show', $course) }}">{{ $course->name }}</a>
                                                    </h4>
                                                </div>
                                                <div class="tp-course-btn home-2">
                                                    <a href="{{ route('courses.show', $course) }}">Preview this Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-12">
                                        <div class="alert alert-info">
                                            No Electrical courses found.
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses Section  End -->


@endsection