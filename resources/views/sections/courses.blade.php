<section class="course-area tp-course-wrapper mt-100 mb-100">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xxl-5 col-xl-6 col-lg-7">
                <div class="tp-section mb-40">
                    <h5 class="tp-section-3-subtitle">Our Courses</h5>
                    <h3 class="tp-section-3-title">Most Popular
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
                            @foreach($courses as $course)
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-thumb">
                                        <a href="{{ route('courses.show', $course) }}"><img class="course-pink"
                                                src="{{ asset('storage/' . $course->image) }}" alt="{{$course->name}}"></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            @foreach($course->categories as $cat)
                                                <span>{{ $cat->name }}</span>@if(!$loop->last), @endif
                                            @endforeach
                                        </div>

                                        <h4 class="tp-course-title">
                                            <a href="{{ route('courses.show', $course) }}">{{$course->name}}</a>
                                        </h4>
                                    </div>
                                    <div class="tp-course-btn home-2">
                                        <a href="{{ route('courses.show', $course) }}">Preview this Course</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('courses.index') }}" class="btn btn-primary">View All Courses</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-trending" role="tabpanel" aria-labelledby="nav-trending-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-4.png" alt="">Indigo Violet</span>
                                        <span class="discount">-25%</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-sky"
                                                src="assets/img/course/course-thumb-4.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Computer science: mathematical and
                                                analytical</a>
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
                                        <a href="course-details-2.html"><img class="course-lightblue"
                                                src="assets/img/course/course-thumb-6.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Machine learning A-Z: <br> hands-on python
                                                and java</a>
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
                                        <a href="course-details-2.html"><img class="course-lightblue"
                                                src="assets/img/course/course-thumb-2.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Starting seo as your home <br> based
                                                business</a>
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
                                        <a href="course-details-2.html"><img class="course-pink"
                                                src="assets/img/course/course-thumb-1.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Interior design concepts <br>
                                                Masterclass</a>
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
                                        <a href="course-details-2.html"><img class="course-sky"
                                                src="assets/img/course/course-thumb-3.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Grow personal financial security <br>
                                                thinking & principles</a>
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
                                        <a href="course-details-2.html"><img class="course-pink"
                                                src="assets/img/course/course-thumb-5.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">The complete guide to build <br> restful API
                                                application</a>
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
                    <div class="tab-pane fade" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab"
                        tabindex="0">
                        <div class="row">

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-featured" role="tabpanel" aria-labelledby="nav-featured-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-course-item p-relative fix mb-30">
                                    <div class="tp-course-teacher mb-15">
                                        <span><img src="assets/img/teacher/teacher-1.png" alt="">Hilary Ouse</span>
                                    </div>
                                    <div class="tp-course-thumb">
                                        <a href="course-details-2.html"><img class="course-pink"
                                                src="assets/img/course/course-thumb-1.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Interior design concepts <br>
                                                Masterclass</a>
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
                                        <a href="course-details-2.html"><img class="course-lightblue"
                                                src="assets/img/course/course-thumb-2.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Starting seo as your home <br> based
                                                business</a>
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
                                        <a href="course-details-2.html"><img class="course-sky"
                                                src="assets/img/course/course-thumb-3.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Grow personal financial security <br>
                                                thinking & principles</a>
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
                                        <a href="course-details-2.html"><img class="course-pink"
                                                src="assets/img/course/course-thumb-5.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">The complete guide to build <br> restful API
                                                application</a>
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
                                        <a href="course-details-2.html"><img class="course-sky"
                                                src="assets/img/course/course-thumb-4.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Computer science: mathematical and
                                                analytical</a>
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
                                        <a href="course-details-2.html"><img class="course-lightblue"
                                                src="assets/img/course/course-thumb-6.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-course-content">
                                        <div class="tp-course-tag mb-10">
                                            <span>Art & Design</span>
                                        </div>
                                        <div class="tp-course-meta">
                                            <span>
                                                <span>
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E"
                                                            stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                12 Lessons
                                            </span>
                                            <span>
                                                <span>
                                                    <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14"
                                                            stroke="#94928E" stroke-width="1.2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                                45 Student
                                            </span>
                                        </div>
                                        <h4 class="tp-course-title">
                                            <a href="course-details-2.html">Machine learning A-Z: <br> hands-on python
                                                and java</a>
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
