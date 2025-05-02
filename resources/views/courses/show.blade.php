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
                        <span class="tp-course-details-2-category">{{ $course->category ? $course->category->name : 'Uncategorized' }}</span>
                        <h3 class="tp-course-details-2-title">{{ $course->name }}</h3>
                        <div class="tp-course-details-2-meta-wrapper d-flex align-items-center flex-wrap">
                            <div class="tp-course-details-2-meta ">
                                <div class="tp-course-details-2-author d-flex align-items-center">
                                    <div class="tp-course-details-2-author-avater">
                                        <img src="{{ $course->instructor && $course->instructor->image ? asset('storage/' . $course->instructor->image) : asset('assets/img/teacher/default.png') }}" alt="{{ $course->instructor ? $course->instructor->name : 'Instructor' }}">
                                    </div>
                                    <div class="tp-course-details-2-author-content">
                                        <span class="tp-course-details-2-author-designation">Instructor</span>
                                        <h3 class="tp-course-details-2-meta-title">{{ $course->instructor?->name ?? 'No Instructor' }} {{--{{ $course->instructor ? $course->instructor->name : 'Instructor' }}--}}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-course-details-2-meta">
                                <span class="tp-course-details-2-meta-subtitle">Category</span>
                                <h3 class="tp-course-details-2-meta-title">Data Science</h3>
                            </div>
                            <div class="tp-course-details-2-meta">
                                <span class="tp-course-details-2-meta-subtitle">Start Date</span>
                                <h3 class="tp-course-details-2-meta-title">15 July, 2024</h3>
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
                                    <p>This course is aimed at people interested in UI/UX Design. We’ll start from the very <br>
                                        beginning and work all the way through, step by step. If you already have some UI/UX <br>
                                        Design experience but want to get up to speed using Adobe XD then this course is perfect <br>
                                        for you too!</p>
                                    <p>First, we will go over the differences between UX and UI Design. We will look at what our <br>
                                        brief for this real-world project is, then we will learn about low-fidelity wireframes and how <br>
                                        to make use of existing UI design kits.</p>
                                </div>
                                <a class="tp-course-details-showmore show-more-button"><span class="svg-icon">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V11" stroke="#3C66F9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 6H11" stroke="#3C66F9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                                <p>With this course, you also have access to a whole lot of resources not only for reference but
                                    also free media like aerial video shots, background music, fonts, and more.</p>
                            </div>
                        </div>

                        <div id="curriculum" class="pt-70">
                            <h4 class="tp-course-details-2-main-title">Course Content</h4>
                            <div class="tp-course-details-2-faq">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                            <button class="accordion-button d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                <span class="span">Intro to Course and Histudy</span>
                                                <span class="lesson"></span>
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                            <div class="accordion-body">
                                                <div class="tp-course-details-2-faq-item d-flex justify-content-between">
                                                    <div class="left"><span> <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                            </svg>{!! nl2br(e($course->description)) !!} </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                            <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                <span class="span">Course Content PDF</span>
                                                <span class="lesson"></span>
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                            <div class="accordion-body">
                                                <div class="tp-course-details-2-faq-item d-flex justify-content-between">
                                                    <div class="left"><span> <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            </svg>  @if($course->outline_link)
                                                                {!! $course->outline_link !!}
                                                            @else
                                                                <p>Course Outline will be available soon.</p>
                                                            @endif</span>
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
                                    <img src="assets/img/course/details/user.png" alt="">
                                </div>
                                <div class="tp-course-details-2-instructor-content">
                                    <h5>Undon Xie</h5>
                                    <span class="pre">President of Sales</span>
                                    <div class="tp-course-details-2-instructor-sub d-flex">
                                       <span><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path d="M11.9376 8.84884C11.7434 9.03675 11.6541 9.3085 11.6984 9.57502L12.365 13.2583C12.4213 13.5705 12.2893 13.8864 12.0276 14.0668C11.7711 14.254 11.4299 14.2764 11.1502 14.1267L7.82888 12.3974C7.7134 12.336 7.58517 12.303 7.45393 12.2993H7.25071C7.18022 12.3098 7.11123 12.3322 7.04824 12.3667L3.72617 14.1042C3.56194 14.1866 3.37597 14.2158 3.19374 14.1866C2.7498 14.1027 2.45359 13.6805 2.52633 13.2351L3.19374 9.55181C3.23798 9.28305 3.14875 9.0098 2.95452 8.8189L0.246625 6.19868C0.0201542 5.97933 -0.0585855 5.64993 0.044901 5.35273C0.145388 5.05627 0.401854 4.83991 0.711564 4.79125L4.43858 4.25149C4.72204 4.22229 4.97101 4.0501 5.09849 3.79557L6.74078 0.434207C6.77977 0.359344 6.83001 0.29047 6.89076 0.232076L6.95825 0.179672C6.99349 0.140743 7.03399 0.108552 7.07898 0.0823496L7.16072 0.0524043L7.2882 0H7.60391C7.88588 0.0291967 8.13409 0.197639 8.26383 0.44918L9.92786 3.79557C10.0478 4.04037 10.2811 4.21031 10.5503 4.25149L14.2773 4.79125C14.5922 4.83617 14.8555 5.05327 14.9597 5.35273C15.0579 5.65293 14.9732 5.98233 14.7422 6.19868L11.9376 8.84884Z" fill="#FFB21D" />
                                           </svg> 4.4 Rating</span>
                                        <span><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.61133 7.50075V6.53875C5.61133 5.29725 6.48883 4.79675 7.56133 5.41425L8.39333 5.89525L9.22533 6.37625C10.2978 6.99375 10.2978 8.00775 9.22533 8.62525L8.39333 9.10625L7.56133 9.58725C6.48883 10.2048 5.61133 9.69775 5.61133 8.46275V7.50075Z" stroke="#6C7275" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z" stroke="#6C7275" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg> 58 Courses</span>
                                        <span><svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.5711 7.5C8.36215 7.5 9.81407 6.04493 9.81407 4.25C9.81407 2.45507 8.36215 1 6.5711 1C4.78005 1 3.32812 2.45507 3.32812 4.25C3.32812 6.04493 4.78005 7.5 6.5711 7.5Z" stroke="#6C7275" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12.1429 14C12.1429 11.4845 9.64577 9.44999 6.57143 9.44999C3.49709 9.44999 1 11.4845 1 14" stroke="#6C7275" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg> 45 Student</span>
                                    </div>
                                    <div class="tp-course-details-2-instructor-text">
                                        <p>I am also the founder of a large local design organization, Salt Lake <br>
                                            Designers, where I and other local influencers help cultivate the talents <br>
                                            of up and coming UX designers through workshops and panel discussions.</p>
                                        <p>Undon Xie is a brilliant educator, whose life was spent for computer <br>
                                            science and love of nature.</p>
                                    </div>
                                    <div class="tp-course-details-2-instructor-social">
                                        <a href="#"><span><svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.26878 7.01266C1.63274 7.01266 1.5 7.13497 1.5 7.721V8.7835C1.5 9.36953 1.63274 9.49183 2.26878 9.49183H3.80635V13.7418C3.80635 14.3279 3.9391 14.4502 4.57514 14.4502H6.11271C6.74875 14.4502 6.88149 14.3279 6.88149 13.7418V9.49183H8.60795C9.09034 9.49183 9.21464 9.40544 9.34716 8.97809L9.67664 7.91559C9.90365 7.18353 9.76376 7.01266 8.93743 7.01266H6.88149V5.24183C6.88149 4.85063 7.22569 4.5335 7.65028 4.5335H9.83836C10.4744 4.5335 10.6071 4.41119 10.6071 3.82516V2.4085C10.6071 1.82247 10.4744 1.70016 9.83836 1.70016H7.65028C5.52734 1.70016 3.80635 3.28582 3.80635 5.24183V7.01266H2.26878Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                                </svg></span></a>
                                        <a href="#"><span>
                                          <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M1.0957 7.65019C1.0957 4.84534 1.0957 3.44291 1.96706 2.57155C2.83842 1.7002 4.24085 1.7002 7.0457 1.7002C9.85056 1.7002 11.253 1.7002 12.1243 2.57155C12.9957 3.44291 12.9957 4.84534 12.9957 7.65019C12.9957 10.4551 12.9957 11.8575 12.1243 12.7288C11.253 13.6002 9.85056 13.6002 7.0457 13.6002C4.24085 13.6002 2.83842 13.6002 1.96706 12.7288C1.0957 11.8575 1.0957 10.4551 1.0957 7.65019Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                              <path d="M9.86145 7.65045C9.86145 9.20702 8.5996 10.4689 7.04303 10.4689C5.48646 10.4689 4.22461 9.20702 4.22461 7.65045C4.22461 6.09388 5.48646 4.83203 7.04303 4.83203C8.5996 4.83203 9.86145 6.09388 9.86145 7.65045Z" stroke="currentColor" stroke-width="1.5" />
                                              <path d="M10.4941 4.20557L10.4852 4.20557" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </span></a>
                                        <a href="#"><span>
                                          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M14.2578 1.60544C13.7028 1.99691 13.0884 2.29632 12.438 2.49214C12.089 2.09081 11.6251 1.80636 11.1092 1.67726C10.5932 1.54816 10.05 1.58063 9.55311 1.77029C9.0562 1.95995 8.62952 2.29765 8.33079 2.7377C8.03206 3.17776 7.87568 3.69895 7.88281 4.23078V4.81032C6.86434 4.83673 5.85514 4.61085 4.9451 4.1528C4.03506 3.69474 3.25243 3.01874 2.6669 2.18498C2.6669 2.18498 0.348722 7.40089 5.56463 9.71907C4.37107 10.5293 2.94923 10.9355 1.50781 10.8782C6.72372 13.7759 13.0987 10.8782 13.0987 4.21339C13.0982 4.05196 13.0827 3.89093 13.0524 3.73237C13.6438 3.14905 14.0612 2.41258 14.2578 1.60544Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </span></a>
                                        <a href="#"><span>
                                          <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M7.27344 12.3997C8.42711 12.3997 9.53344 12.2857 10.5588 12.0767C11.8394 11.8156 12.4798 11.6851 13.0641 10.9338C13.6484 10.1825 13.6484 9.32007 13.6484 7.59517V6.36665C13.6484 4.64175 13.6484 3.77931 13.0641 3.02801C12.4798 2.27672 11.8394 2.14619 10.5588 1.88514C9.53344 1.67613 8.42711 1.56216 7.27344 1.56216C6.11976 1.56216 5.01343 1.67613 3.98812 1.88514C2.70744 2.14619 2.06711 2.27672 1.48277 3.02801C0.898438 3.77931 0.898438 4.64175 0.898438 6.36665V7.59517C0.898438 9.32007 0.898438 10.1825 1.48277 10.9338C2.06711 11.6851 2.70744 11.8156 3.98812 12.0767C5.01343 12.2857 6.11976 12.3997 7.27344 12.3997Z" stroke="currentColor" stroke-width="1.5" />
                                              <path d="M9.80164 7.18071C9.70704 7.56693 9.20365 7.84432 8.19688 8.3991C7.1019 9.00247 6.55441 9.30416 6.11094 9.18793C5.96074 9.14857 5.82241 9.07935 5.70625 8.98544C5.36328 8.70816 5.36328 8.13252 5.36328 6.98125C5.36328 5.82998 5.36328 5.25434 5.70625 4.97706C5.82241 4.88315 5.96074 4.81393 6.11094 4.77457C6.55441 4.65834 7.1019 4.96003 8.19688 5.5634C9.20365 6.11818 9.70704 6.39557 9.80164 6.78179C9.83383 6.9132 9.83383 7.0493 9.80164 7.18071Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                          </svg>
                                       </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="reviews">
                            <h4 class="tp-course-details-2-main-title">Ratings & Reviews</h4>
                            <div class="tp-course-details-2-review-rating">
                                <div class="row gx-2">
                                    <div class="col-lg-4">
                                        <div class="tp-course-details-2-review-rating-info text-center">
                                            <h5>4.5</h5>
                                            <div class="rating-icons mb-5">
                                             <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                                 </svg></span>
                                             <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                                 </svg></span>
                                             <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                                 </svg></span>
                                             <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                                 </svg></span>
                                             <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M10.2155 7.46476C10.0519 7.62328 9.97674 7.85253 10.014 8.07736L10.5754 11.1845C10.6228 11.4479 10.5117 11.7144 10.2913 11.8666C10.0753 12.0245 9.78792 12.0434 9.55235 11.9171L6.75528 10.4582C6.65802 10.4065 6.55003 10.3787 6.43951 10.3755H6.26836C6.209 10.3844 6.1509 10.4033 6.09785 10.4324L3.30014 11.8982C3.16183 11.9676 3.00521 11.9923 2.85175 11.9676C2.47788 11.8969 2.22842 11.5407 2.28968 11.1649L2.85175 8.05778C2.88901 7.83106 2.81385 7.60054 2.65029 7.4395L0.369807 5.22912C0.179082 5.04408 0.112771 4.76621 0.199923 4.51549C0.284549 4.2654 0.500535 4.08289 0.761359 4.04184L3.9001 3.5865C4.13882 3.56187 4.34849 3.41661 4.45585 3.20189L5.83892 0.366291C5.87176 0.303138 5.91407 0.245036 5.96522 0.195776L6.02206 0.151569C6.05174 0.118729 6.08585 0.0915728 6.12374 0.069469L6.19258 0.0442076L6.29994 0H6.56581C6.80327 0.0246299 7.01231 0.166726 7.12157 0.378922L8.52295 3.20189C8.62399 3.4084 8.8204 3.55176 9.04712 3.5865L12.1859 4.04184C12.4511 4.07973 12.6728 4.26287 12.7606 4.51549C12.8433 4.76873 12.7719 5.04661 12.5774 5.22912L10.2155 7.46476Z" fill="#BFC5CA" />
                                                 </svg></span>
                                            </div>
                                            <p>Rated 4 out of 1 Rating</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="tp-course-details-2-review-details">
                                            <div class="tp-course-details-2-review-content">
                                                <div class="tp-course-details-2-review-item d-flex align-items-center justify-content-between">
                                                    <div class="tp-course-details-2-review-text"><span>5 star</span></div>
                                                    <div class="tp-course-details-2-review-progress">
                                                        <div class="single-progress" data-width="82%"></div>
                                                    </div>
                                                    <div class="tp-course-details-2-review-percent">
                                                        <h5>82%</h5>
                                                    </div>
                                                </div>
                                                <div class="tp-course-details-2-review-item d-flex align-items-center justify-content-between">
                                                    <div class="tp-course-details-2-review-text"><span>4 star</span></div>
                                                    <div class="tp-course-details-2-review-progress">
                                                        <div class="single-progress" data-width="30%"></div>
                                                    </div>
                                                    <div class="tp-course-details-2-review-percent">
                                                        <h5>30%</h5>
                                                    </div>
                                                </div>
                                                <div class="tp-course-details-2-review-item d-flex align-items-center justify-content-between">
                                                    <div class="tp-course-details-2-review-text"><span>3 star</span></div>
                                                    <div class="tp-course-details-2-review-progress">
                                                        <div class="single-progress" data-width="15%"></div>
                                                    </div>
                                                    <div class="tp-course-details-2-review-percent">
                                                        <h5>15%</h5>
                                                    </div>
                                                </div>
                                                <div class="tp-course-details-2-review-item d-flex align-items-center justify-content-between">
                                                    <div class="tp-course-details-2-review-text"><span>2 star</span></div>
                                                    <div class="tp-course-details-2-review-progress">
                                                        <div class="single-progress" data-width="6%"></div>
                                                    </div>
                                                    <div class="tp-course-details-2-review-percent">
                                                        <h5>6%</h5>
                                                    </div>
                                                </div>
                                                <div class="tp-course-details-2-review-item d-flex align-items-center justify-content-between">
                                                    <div class="tp-course-details-2-review-text"><span>1 star</span></div>
                                                    <div class="tp-course-details-2-review-progress">
                                                        <div class="single-progress" data-width="10%"></div>
                                                    </div>
                                                    <div class="tp-course-details-2-review-percent">
                                                        <h5>10%</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4 class="tp-course-details-2-main-title">Featured review</h4>
                        <div class="tp-course-details-2-review-reply-wrap">
                            <div class="tp-course-details-2-review-item-reply">
                                <div class="tp-course-details-2-review-top d-flex">
                                    <div class="tp-course-details-2-review-thumb">
                                        <img src="assets/img/course/details/user-2.png" alt="">
                                    </div>
                                    <div class="tp-course-details-2-review-content">
                                        <h4>David W.</h4>
                                        <div class="tp-course-details-2-review-star">
                                          <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                              </svg></span>
                                          <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                              </svg></span>
                                          <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                              </svg></span>
                                          <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                              </svg></span>
                                          <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10.2155 7.46476C10.0519 7.62328 9.97674 7.85253 10.014 8.07736L10.5754 11.1845C10.6228 11.4479 10.5117 11.7144 10.2913 11.8666C10.0753 12.0245 9.78792 12.0434 9.55235 11.9171L6.75528 10.4582C6.65802 10.4065 6.55003 10.3787 6.43951 10.3755H6.26836C6.209 10.3844 6.1509 10.4033 6.09785 10.4324L3.30014 11.8982C3.16183 11.9676 3.00521 11.9923 2.85175 11.9676C2.47788 11.8969 2.22842 11.5407 2.28968 11.1649L2.85175 8.05778C2.88901 7.83106 2.81385 7.60054 2.65029 7.4395L0.369807 5.22912C0.179082 5.04408 0.112771 4.76621 0.199923 4.51549C0.284549 4.2654 0.500535 4.08289 0.761359 4.04184L3.9001 3.5865C4.13882 3.56187 4.34849 3.41661 4.45585 3.20189L5.83892 0.366291C5.87176 0.303138 5.91407 0.245036 5.96522 0.195776L6.02206 0.151569C6.05174 0.118729 6.08585 0.0915728 6.12374 0.069469L6.19258 0.0442076L6.29994 0H6.56581C6.80327 0.0246299 7.01231 0.166726 7.12157 0.378922L8.52295 3.20189C8.62399 3.4084 8.8204 3.55176 9.04712 3.5865L12.1859 4.04184C12.4511 4.07973 12.6728 4.26287 12.7606 4.51549C12.8433 4.76873 12.7719 5.04661 12.5774 5.22912L10.2155 7.46476Z" fill="#BFC5CA"></path>
                                              </svg></span>
                                            <span class="span"> 2 weeks ago</span>
                                        </div>
                                    </div>
                                </div>
                                <p>I love the way the instructor goes about the course. So easy to follow, even though a <br>
                                    little bit challenging as expected.</p>
                                <div class="tp-course-details-2-review-react d-flex align-items-center">
                                    <span>Helpful? </span>
                                    <div class="react">
                                        <a href="#">
                                             <span><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M1 8.41134C1 7.5017 1.7165 6.76428 2.60034 6.76428C3.9261 6.76428 5.00084 7.8704 5.00084 9.23487V12.529C5.00084 13.8935 3.9261 14.9996 2.60034 14.9996C1.7165 14.9996 1 14.2622 1 13.3525V8.41134Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                     <path d="M11.7805 4.54633L11.5674 5.25463C11.3928 5.83503 11.3055 6.12523 11.3727 6.35442C11.427 6.53984 11.5462 6.69966 11.7087 6.80482C11.9096 6.9348 12.2134 6.9348 12.821 6.9348H13.1443C15.2008 6.9348 16.229 6.9348 16.7147 7.56131C16.7702 7.63291 16.8196 7.70904 16.8623 7.7889C17.2359 8.48765 16.8111 9.42893 15.9616 11.3115C15.182 13.0391 14.7922 13.9029 14.0684 14.4113C13.9984 14.4605 13.9264 14.507 13.8526 14.5505C13.0906 15 12.1465 15 10.2583 15H9.84879C7.56121 15 6.41742 15 5.70675 14.2913C4.99609 13.5827 4.99609 12.4421 4.99609 10.1609V9.3591C4.99609 8.16029 4.99609 7.56088 5.20281 7.01226C5.40953 6.46363 5.80535 6.01253 6.59699 5.11033L9.87081 1.37928C9.95292 1.28571 9.99398 1.23892 10.0302 1.2065C10.3681 0.903878 10.8895 0.937941 11.1849 1.28193C11.2166 1.31878 11.2512 1.37052 11.3203 1.47397C11.4285 1.63581 11.4826 1.71672 11.5298 1.79689C11.9518 2.51458 12.0795 3.36712 11.8862 4.17648C11.8646 4.26687 11.8365 4.36008 11.7805 4.54633Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                 </svg></span>
                                        </a>
                                        <a href="#">
                                             <span><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M1 7.58866C1 8.4983 1.7165 9.23572 2.60034 9.23572C3.9261 9.23572 5.00084 8.1296 5.00084 6.76513V3.47101C5.00084 2.10654 3.9261 1.00042 2.60034 1.00042C1.7165 1.00042 1 1.73784 1 2.64748V7.58866Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                     <path d="M11.7805 11.4537L11.5674 10.7454C11.3928 10.165 11.3055 9.87477 11.3727 9.64558C11.427 9.46016 11.5462 9.30034 11.7087 9.19518C11.9096 9.0652 12.2134 9.0652 12.821 9.0652H13.1443C15.2008 9.0652 16.229 9.0652 16.7147 8.43869C16.7702 8.36709 16.8196 8.29096 16.8623 8.2111C17.2359 7.51235 16.8111 6.57107 15.9616 4.6885C15.182 2.96092 14.7922 2.09713 14.0684 1.5887C13.9984 1.53947 13.9264 1.49305 13.8526 1.44953C13.0906 1 12.1465 1 10.2583 1H9.84879C7.56121 1 6.41742 1 5.70675 1.70867C4.99609 2.41734 4.99609 3.55794 4.99609 5.83912V6.6409C4.99609 7.83971 4.99609 8.43912 5.20281 8.98774C5.40953 9.53637 5.80535 9.98747 6.59699 10.8897L9.87081 14.6207C9.95292 14.7143 9.99398 14.7611 10.0302 14.7935C10.3681 15.0961 10.8895 15.0621 11.1849 14.7181C11.2166 14.6812 11.2512 14.6295 11.3203 14.526C11.4285 14.3642 11.4826 14.2833 11.5298 14.2031C11.9518 13.4854 12.0795 12.6329 11.8862 11.8235C11.8646 11.7331 11.8365 11.6399 11.7805 11.4537Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                 </svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-course-details-2-review-item-reply">
                                <div class="tp-course-details-2-review-top d-flex">
                                    <div class="tp-course-details-2-review-thumb">
                                        <img src="assets/img/course/details/user-3.png" alt="">
                                    </div>
                                    <div class="tp-course-details-2-review-content">
                                        <h4>Nithish ..</h4>
                                        <div class="tp-course-details-2-review-star">
                                          <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                              </svg></span>
                                          <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                              </svg></span>
                                          <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                              </svg></span>
                                          <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10.0534 7.46476C9.88979 7.62328 9.81464 7.85253 9.8519 8.07736L10.4133 11.1845C10.4607 11.4479 10.3495 11.7144 10.1291 11.8666C9.91316 12.0245 9.62581 12.0434 9.39024 11.9171L6.59317 10.4582C6.49591 10.4065 6.38792 10.3787 6.2774 10.3755H6.10625C6.04689 10.3844 5.98879 10.4033 5.93574 10.4324L3.13803 11.8982C2.99972 11.9676 2.8431 11.9923 2.68964 11.9676C2.31577 11.8969 2.06631 11.5407 2.12757 11.1649L2.68964 8.05778C2.7269 7.83106 2.65174 7.60054 2.48818 7.4395L0.207697 5.22912C0.0169731 5.04408 -0.0493383 4.76621 0.0378138 4.51549C0.12244 4.2654 0.338425 4.08289 0.59925 4.04184L3.73799 3.5865C3.97671 3.56187 4.18638 3.41661 4.29374 3.20189L5.67681 0.366291C5.70965 0.303138 5.75196 0.245036 5.80311 0.195776L5.85995 0.151569C5.88963 0.118729 5.92374 0.0915728 5.96163 0.069469L6.03047 0.0442076L6.13783 0H6.40371C6.64116 0.0246299 6.8502 0.166726 6.95946 0.378922L8.36084 3.20189C8.46188 3.4084 8.65829 3.55176 8.88501 3.5865L12.0238 4.04184C12.289 4.07973 12.5107 4.26287 12.5984 4.51549C12.6812 4.76873 12.6098 5.04661 12.4153 5.22912L10.0534 7.46476Z" fill="#FFB21D" />
                                              </svg></span>
                                          <span><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M10.2155 7.46476C10.0519 7.62328 9.97674 7.85253 10.014 8.07736L10.5754 11.1845C10.6228 11.4479 10.5117 11.7144 10.2913 11.8666C10.0753 12.0245 9.78792 12.0434 9.55235 11.9171L6.75528 10.4582C6.65802 10.4065 6.55003 10.3787 6.43951 10.3755H6.26836C6.209 10.3844 6.1509 10.4033 6.09785 10.4324L3.30014 11.8982C3.16183 11.9676 3.00521 11.9923 2.85175 11.9676C2.47788 11.8969 2.22842 11.5407 2.28968 11.1649L2.85175 8.05778C2.88901 7.83106 2.81385 7.60054 2.65029 7.4395L0.369807 5.22912C0.179082 5.04408 0.112771 4.76621 0.199923 4.51549C0.284549 4.2654 0.500535 4.08289 0.761359 4.04184L3.9001 3.5865C4.13882 3.56187 4.34849 3.41661 4.45585 3.20189L5.83892 0.366291C5.87176 0.303138 5.91407 0.245036 5.96522 0.195776L6.02206 0.151569C6.05174 0.118729 6.08585 0.0915728 6.12374 0.069469L6.19258 0.0442076L6.29994 0H6.56581C6.80327 0.0246299 7.01231 0.166726 7.12157 0.378922L8.52295 3.20189C8.62399 3.4084 8.8204 3.55176 9.04712 3.5865L12.1859 4.04184C12.4511 4.07973 12.6728 4.26287 12.7606 4.51549C12.8433 4.76873 12.7719 5.04661 12.5774 5.22912L10.2155 7.46476Z" fill="#BFC5CA"></path>
                                              </svg></span>
                                            <span class="span"> 2 weeks ago</span>
                                        </div>
                                    </div>
                                </div>
                                <p>I love the way the instructor goes about the course. So easy to follow, even though a <br>
                                    little bit challenging as expected.</p>
                                <div class="tp-course-details-2-review-react d-flex align-items-center">
                                    <span>Helpful? </span>
                                    <div class="react">
                                        <a href="#">
                                             <span><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M1 8.41134C1 7.5017 1.7165 6.76428 2.60034 6.76428C3.9261 6.76428 5.00084 7.8704 5.00084 9.23487V12.529C5.00084 13.8935 3.9261 14.9996 2.60034 14.9996C1.7165 14.9996 1 14.2622 1 13.3525V8.41134Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                     <path d="M11.7805 4.54633L11.5674 5.25463C11.3928 5.83503 11.3055 6.12523 11.3727 6.35442C11.427 6.53984 11.5462 6.69966 11.7087 6.80482C11.9096 6.9348 12.2134 6.9348 12.821 6.9348H13.1443C15.2008 6.9348 16.229 6.9348 16.7147 7.56131C16.7702 7.63291 16.8196 7.70904 16.8623 7.7889C17.2359 8.48765 16.8111 9.42893 15.9616 11.3115C15.182 13.0391 14.7922 13.9029 14.0684 14.4113C13.9984 14.4605 13.9264 14.507 13.8526 14.5505C13.0906 15 12.1465 15 10.2583 15H9.84879C7.56121 15 6.41742 15 5.70675 14.2913C4.99609 13.5827 4.99609 12.4421 4.99609 10.1609V9.3591C4.99609 8.16029 4.99609 7.56088 5.20281 7.01226C5.40953 6.46363 5.80535 6.01253 6.59699 5.11033L9.87081 1.37928C9.95292 1.28571 9.99398 1.23892 10.0302 1.2065C10.3681 0.903878 10.8895 0.937941 11.1849 1.28193C11.2166 1.31878 11.2512 1.37052 11.3203 1.47397C11.4285 1.63581 11.4826 1.71672 11.5298 1.79689C11.9518 2.51458 12.0795 3.36712 11.8862 4.17648C11.8646 4.26687 11.8365 4.36008 11.7805 4.54633Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                 </svg></span>
                                        </a>
                                        <a href="#">
                                             <span><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M1 7.58866C1 8.4983 1.7165 9.23572 2.60034 9.23572C3.9261 9.23572 5.00084 8.1296 5.00084 6.76513V3.47101C5.00084 2.10654 3.9261 1.00042 2.60034 1.00042C1.7165 1.00042 1 1.73784 1 2.64748V7.58866Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                     <path d="M11.7805 11.4537L11.5674 10.7454C11.3928 10.165 11.3055 9.87477 11.3727 9.64558C11.427 9.46016 11.5462 9.30034 11.7087 9.19518C11.9096 9.0652 12.2134 9.0652 12.821 9.0652H13.1443C15.2008 9.0652 16.229 9.0652 16.7147 8.43869C16.7702 8.36709 16.8196 8.29096 16.8623 8.2111C17.2359 7.51235 16.8111 6.57107 15.9616 4.6885C15.182 2.96092 14.7922 2.09713 14.0684 1.5887C13.9984 1.53947 13.9264 1.49305 13.8526 1.44953C13.0906 1 12.1465 1 10.2583 1H9.84879C7.56121 1 6.41742 1 5.70675 1.70867C4.99609 2.41734 4.99609 3.55794 4.99609 5.83912V6.6409C4.99609 7.83971 4.99609 8.43912 5.20281 8.98774C5.40953 9.53637 5.80535 9.98747 6.59699 10.8897L9.87081 14.6207C9.95292 14.7143 9.99398 14.7611 10.0302 14.7935C10.3681 15.0961 10.8895 15.0621 11.1849 14.7181C11.2166 14.6812 11.2512 14.6295 11.3203 14.526C11.4285 14.3642 11.4826 14.2833 11.5298 14.2031C11.9518 13.4854 12.0795 12.6329 11.8862 11.8235C11.8646 11.7331 11.8365 11.6399 11.7805 11.4537Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                 </svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-course-details-2-review-reply-btn">
                                <a href="#">Show More Reviews</a>
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
                            <a class="active" href="{{ route('courses.register', $course) }}" target="_blank">Register</a>
                        </div>

                        <div class="tp-course-details-2-widget-list">
                            <h5>This course includes:</h5>

                            <div class="tp-course-details-2-widget-list-item-wrapper">
                                <div class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                    <span> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 3.80005V8.00005L10.8 9.40005" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> Duration</span>
                                    <span>{{$course->hours}} Hours</span>
                                </div>
                                <div class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                    <span> <svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 13V5.5" stroke="#4F5158" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10 13V1" stroke="#4F5158" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1 13V10" stroke="#4F5158" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> Skill Level</span>
                                    <span>Beginner</span>
                                </div>




                                @if($course->sessions && count($course->sessions) > 0)
                                @foreach($course->sessions as $session)
                                        <!-- Start Date -->
                                <div class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                    <span>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M1.06836 6.18286H13.5451" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M10.4102 8.91675H10.4194" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M7.30273 8.91675H7.312" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M4.1875 8.91675H4.19676" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M10.4102 11.6375H10.4194" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M7.30273 11.6375H7.312" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M4.1875 11.6375H4.19676" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.1289 1V3.30355" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M4.47656 1V3.30355" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2668 2.10535H4.33967C2.28399 2.10535 1 3.2505 1 5.35547V11.6902C1 13.8283 2.28399 14.9999 4.33967 14.9999H10.2603C12.3225 14.9999 13.6 13.8481 13.6 11.7432V5.35547C13.6065 3.2505 12.329 2.10535 10.2668 2.10535Z" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        Start {{ $loop->iteration }} Date
                                    </span>
                                    <span>{{ \Carbon\Carbon::parse($session->start_date)->format('d M Y') }}</span>
                                </div>

                                <!-- End Date -->
                                <div class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                    <span>
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.4" d="M1.06836 6.18286H13.5451" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M10.4102 8.91675H10.4194" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M7.30273 8.91675H7.312" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M4.1875 8.91675H4.19676" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M10.4102 11.6375H10.4194" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M7.30273 11.6375H7.312" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path opacity="0.4" d="M4.1875 11.6375H4.19676" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.1289 1V3.30355" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M4.47656 1V3.30355" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2668 2.10535H4.33967C2.28399 2.10535 1 3.2505 1 5.35547V11.6902C1 13.8283 2.28399 14.9999 4.33967 14.9999H10.2603C12.3225 14.9999 13.6 13.8481 13.6 11.7432V5.35547C13.6065 3.2505 12.329 2.10535 10.2668 2.10535Z" stroke="#4F5158" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        End {{ $loop->iteration }} Date
                                    </span>
                                    <span>{{ \Carbon\Carbon::parse($session->end_date)->format('d M Y') }}</span>
                                </div>
                                @endforeach
                                @else
                                    <div class="tp-course-details-2-widget-list-item d-flex align-items-center justify-content-between">
                                        <span>
                                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        <div class="row">
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
        </div>
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