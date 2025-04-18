@include('partials.head')
@include('partials.header')

@section('content')

        <!-- hero-area-start -->
    <section class="tp-hero-area">
    <div class="swiper tp-slider-active">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide">
                <div class="tp-hero-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-9 col-lg-11">
                                <div class="tp-hero-wrapper">
                                    <span class="tp-hero-subtitle">{{ $slider->title }}</span>
                                    <h2 class="tp-hero-title">{{ $slider->description }}</h2>
                                    <div class="tp-hero-btn">
                                        <a class="tp-btn" href="university-program.html">
                                            Enroll Now
                                          <span>
                                             <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M1 7H13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                 <path d="M7 1L13 7L7 13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                             </svg>
                                          </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-hero-bg" data-background="{{ asset('storage/' . $slider->image) }}"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- hero-area-end -->


<section class="course-area tp-course-wrapper mt-100 mb-100">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xxl-5 col-xl-6 col-lg-7">
                <div class="tp-section mb-40">
                    <h5 class="tp-section-3-subtitle">Our Courses</h5>
                    <h3 class="tp-section-3-title">Most Popular
                           <span>Courses
                              <img class="tp-underline-shape-6 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/unlerline/course-2-svg-1.svg" alt="">
                           </span>
                    </h3>
                </div>
            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-5">
                <div class="tp-course-tab d-flex justify-content-lg-end mb-40">
                    <nav>
                        <div class="nav" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">
                                All Courses
                              <span>
                                 <img src="assets/img/course/course-2-shape-1.png" alt="">
                              </span>
                            </button>
                            <button class="nav-link" id="nav-trending-tab" data-bs-toggle="tab" data-bs-target="#nav-trending" type="button" role="tab" aria-controls="nav-trending" aria-selected="false">
                                Trending
                              <span>
                                 <img src="assets/img/course/course-2-shape-1.png" alt="">
                              </span>
                            </button>
                            <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular" aria-selected="false">
                                Popularity
                              <span>
                                 <img src="assets/img/course/course-2-shape-1.png" alt="">
                              </span>
                            </button>
                            <button class="nav-link" id="nav-featured-tab" data-bs-toggle="tab" data-bs-target="#nav-featured" type="button" role="tab" aria-controls="nav-featured" aria-selected="false">
                                Featured
                              <span>
                                 <img src="assets/img/course/course-2-shape-1.png" alt="">
                              </span>
                            </button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content wow fadeInUp" data-wow-delay=".3s" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab" tabindex="0">
                        <div class="row">
                            @foreach($courses as $course)
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-pink" src="{{ asset('storage/' . $course->image) }}" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>{{$course->category_id}}</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             {{$course->hours}}
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">{{$course->name}}</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-trending" role="tabpanel" aria-labelledby="nav-trending-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-4.png" alt="">Indigo Violet</span>
                                        <span class="discount">-25%</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-sky" src="assets/img/course/course-thumb-4.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Computer science: mathematical and analytical</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <del>$26.00</del>
                                                <span>$54.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-6.png" alt="">Hanson Deck</span>
                                        <span class="discount">-25%</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-lightblue" src="assets/img/course/course-thumb-6.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Machine learning A-Z: <br> hands-on python and java</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <del>$26.00</del>
                                                <span>$84.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-2.png" alt="">Joss Sticks</span>
                                        <span class="discount">-25%</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-lightblue" src="assets/img/course/course-thumb-2.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Starting seo as your home <br> based business</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <del>$26.00</del>
                                                <span>$54.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-1.png" alt="">Hilary Ouse</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-pink" src="assets/img/course/course-thumb-1.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Interior design concepts <br> Masterclass</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-3.png" alt="">Gustav Purpleson</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-sky" src="assets/img/course/course-thumb-3.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Grow personal financial security <br> thinking & principles</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <span>$86.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-5.png" alt="">Benjamin Evalent</span>
                                        <span class="discount">-25%</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-pink" src="assets/img/course/course-thumb-5.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">The complete guide to build <br> restful API application</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab" tabindex="0">
                        <div class="row">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-featured" role="tabpanel" aria-labelledby="nav-featured-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-1.png" alt="">Hilary Ouse</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-pink" src="assets/img/course/course-thumb-1.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Interior design concepts <br> Masterclass</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-2.png" alt="">Joss Sticks</span>
                                        <span class="discount">-25%</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-lightblue" src="assets/img/course/course-thumb-2.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Starting seo as your home <br> based business</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <del>$26.00</del>
                                                <span>$54.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-3.png" alt="">Gustav Purpleson</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-sky" src="assets/img/course/course-thumb-3.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Grow personal financial security <br> thinking & principles</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <span>$86.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-5.png" alt="">Benjamin Evalent</span>
                                        <span class="discount">-25%</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-pink" src="assets/img/course/course-thumb-5.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">The complete guide to build <br> restful API application</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <span>Free</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-4.png" alt="">Indigo Violet</span>
                                        <span class="discount">-25%</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-sky" src="assets/img/course/course-thumb-4.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Computer science: mathematical and analytical</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <del>$26.00</del>
                                                <span>$54.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-6.png" alt="">Hanson Deck</span>
                                        <span class="discount">-25%</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-lightblue" src="assets/img/course/course-thumb-6.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                          <span>
                                             <span>
                                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 Lessons
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             45 Student
                                          </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Machine learning A-Z: <br> hands-on python and java</a>
                                        </h4>
                                        <div class="tp-course-rating d-flex align-items-end justify-content-between">
                                            <div class="tp-course-rating-star">
                                                <p>5.0<span> /5</span></p>
                                                <div class="tp-course-rating-icon">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="tp-course-pricing home-2">
                                                <del>$26.00</del>
                                                <span>$84.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="course-details-2.html">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about-area-start -->
<section class="about-area tp-about-bg grey-bg pt-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tp-about-wrap mb-60 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="tp-about-thumb-wrapper">
                        <div class="tp-about-thumb-1">
                            <img src="assets/img/about/about-thumb-1.jpg" alt="">
                        </div>
                        <div class="tp-about-thumb-2">
                            <img src="assets/img/about/about-thumb-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="tp-about-shape">
                        <div class="tp-about-shape-1">
                            <img src="assets/img/about/about-shape-1.jpg" alt="">
                        </div>
                        <div class="tp-about-shape-2">
                            <img src="assets/img/about/about-shape-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="tp-about-exprience">
                        <div class="tp-about-exprience-text d-flex">
                            <h3 class="tp-about-exprience-count">
                                <span data-purecounter-duration="1" data-purecounter-end="25"  class="purecounter">23</span>
                            </h3>
                            <p>Years of <br> Experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tp-about-wrapper mb-60 wow fadeInRight" data-wow-delay=".3s">
                    <div class="tp-section mb-40">
                        <h5 class="tp-section-subtitle">About Our Company</h5>
                        <h3 class="tp-section-title mb-30">A few words <br> about
                              <span> CAD Masters <svg width="180" height="13" viewBox="0 0 180 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M173.163 12.3756C97.1838 -3.8242 30.6496 5.67799 7.32494 12.2553C5.30414 12.8252 2.43544 12.6722 0.917529 11.9135C-0.600387 11.1549 -0.192718 10.0779 1.82808 9.50807C27.5427 2.25675 98.002 -7.60121 177.683 9.38783C179.881 9.85641 180.65 10.9051 179.402 11.7301C178.154 12.5552 175.361 12.8442 173.163 12.3756Z" fill="currentColor" />
                                  </svg>
                              </span>
                        </h3>
                        <p>CAD MASTERS is a specialized company in training, technical support and services for engineering and graphics software. From 2007 till now CAD MASTERS adopted a new approach for the integrated solutions in CAD & BIM technology by implementing strategies based on commitment, quality, customer satisfaction and high return of investment. Along years ago CAD MASTERS has expanded its services in Egypt and Gulf. At 2013 CAD MASTERS opened its office at Kuwait to deliver the most updated services to its customers at Gulf area.</p>
                    </div>
                    <div class="tp-about-list">
                        <div class="tp-about-list-item d-flex align-items-center mb-35">
                            <div class="tp-about-list-icon">
                                <span><img src="assets/img/icon/about/about-icon-1.svg" alt="about-icon"></span>
                            </div>
                            <div class="tp-about-list-content">
                                <h5 class="tp-about-list-title">Building Trust</h5>
                                <p>We are committed to <br> building trust</p>
                            </div>
                        </div>
                        <div class="tp-about-list-item d-flex align-items-center mb-35">
                            <div class="tp-about-list-icon">
                                <span><img src="assets/img/icon/about/about-icon-2.svg" alt="about-icon"></span>
                            </div>
                            <div class="tp-about-list-content">
                                <h5 class="tp-about-list-title">Trusted by Students</h5>
                                <p>Most trusted & recommended <br> by students</p>
                            </div>
                        </div>
                        <div class="tp-about-btn pt-10">
                            <a class="tp-btn tp-btn-sm" href="university-apply.html">Read More
                                 <span>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7H13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 1L13 7L7 13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                 </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

<!-- category-area-start -->
<section class="tp-category-6-ptb pb-120 pt-120">
    <div class="container custom-container-1300">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="tp-category-6-heading mb-50 text-center wow fadeInUp" data-wow-delay=".4s">
                    <h3 class="tp-section-3-title color-9">CAD Masters
                           <span>Clients
                              <img class="tp-underline-shape-5 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/shape/bottom-line/line-2-category-2.svg" alt="">
                           </span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row tp-gx-20">
            @foreach($clients as $client)
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="tp-category-6-item mb-30 wow fadeInUp" data-wow-delay=".3s">
                    <div class="tp-category-6-item-thumb">
                        <a href="course-categories.html">
                            <img src="{{ asset('storage/' . $client->image) }}" alt="">
                        </a>
                    </div>
                    <div class="tp-category-6-item-content text-center">
                        <h4 class="tp-category-6-item-title"><a href="course-categories.html">{{ $client->name }}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-category-6-btn text-center pt-40">
                    <div class="tp-hero-6-btn">
                        <a class="tp-btn-inner" href="course-with-filter.html">View all Clients
                              <span>
                                 <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M8.71533 1L13 5.28471L8.71533 9.56941" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                     <path d="M1 5.28473H12.88" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                              </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- category-area-end -->

<!-- author area start -->
<section class="tp-shop-author-area pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-shop-author-wrap d-flex flex-wrap justify-content-between align-items-center mb-50">
                    <div class="tp-shop-author-heading">
                        <h4 class="tp-shop-author-title">Learning Partner</h4>
                        <p>The renovator is proudly partnered with</p>
                    </div>
                    <div class="tp-shop-author-btn">
                        <a href="instructor.html">All Partners <span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9L5 5L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($partners as $partner)
            <div class="col-lg-3 col-sm-6">
                <div class="tp-shop-author-item text-center mb-30">
                    <div class="tp-shop-author-thumb">
                        <img src="{{ asset('storage/' . $partner->image) }}" alt="" >
                    </div>
                    <div class="tp-shop-author-content">
                        <h4 class="tp-shop-author-item-title"><a href="my-profile.html">{{$partner->name}}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- author area end -->









@include('partials.footer')