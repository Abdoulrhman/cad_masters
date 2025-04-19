@include('partials.head')
@include('partials.header')

<!-- hero-area-start -->
<section class="tp-hero-area">
    <div class="swiper tp-slider-active">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide">
                <div class="tp-hero-item"
                    style="background-image: url('{{ asset('storage/' . $slider->image) }}'); background-size: cover; background-position: center;">
                    <div class="tp-hero-overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-9 col-lg-11">
                                <div class="tp-hero-wrapper">
                                    <span class="tp-hero-subtitle">{{ $slider->title }}</span>
                                    <h2 class="tp-hero-title">{{ $slider->description }}</h2>
                                    @if($slider->button_text)
                                    <div class="tp-hero-btn">
                                        <a href="{{ $slider->button_link }}" class="tp-btn">
                                            {{ $slider->button_text }}
                                            <span>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 7H13" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7 1L13 7L7 13" stroke="white" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="tp-program-dot swiper-pagination"></div>
    </div>
</section>
<!-- hero-area-end -->

<style>
.tp-hero-area {
    position: relative;
    height: 600px;
    margin-top: 0;
    overflow: hidden;
}

.tp-slider-active {
    position: relative;
    height: 100%;
    width: 100%;
}

.tp-hero-item {
    position: relative;
    height: 600px;
    display: flex;
    align-items: center;
    z-index: 1;
}

.tp-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    z-index: 1;
}

.tp-hero-wrapper {
    position: relative;
    z-index: 2;
    padding-top: 0;
}

.swiper-pagination.tp-program-dot {
    position: absolute;
    bottom: 30px !important;
    left: 50% !important;
    transform: translateX(-50%);
    z-index: 50;
    width: auto !important;
}

.swiper-pagination.tp-program-dot .swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    display: inline-block;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.5);
    margin: 0 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    border: none;
    opacity: 1;
}

.swiper-pagination.tp-program-dot .swiper-pagination-bullet-active {
    background: #fff;
    width: 12px;
    height: 12px;
}

.tp-hero-subtitle {
    font-size: 20px;
    color: #fff;
    margin-bottom: 15px;
    display: block;
}

.tp-hero-title {
    font-size: 48px;
    line-height: 1.2;
    color: #fff;
    margin-bottom: 30px;
}

.tp-hero-btn .tp-btn {
    background: var(--tp-theme-primary);
    color: #fff;
    padding: 12px 30px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.tp-hero-btn .tp-btn:hover {
    background: var(--tp-theme-secondary);
}

.swiper-slide {
    height: 600px;
}

@media (max-width: 991px) {

    .tp-hero-area,
    .tp-hero-item,
    .swiper-slide {
        height: 500px;
    }

    .tp-hero-title {
        font-size: 36px;
    }

    .tp-hero-subtitle {
        font-size: 18px;
    }
}

@media (max-width: 767px) {

    .tp-hero-area,
    .tp-hero-item,
    .swiper-slide {
        height: 400px;
    }

    .tp-hero-title {
        font-size: 28px;
    }

    .tp-hero-subtitle {
        font-size: 16px;
    }
}
</style>

<!-- course-area-start -->
@include('sections.courses')
<!-- course-area-end -->

<!-- about-area-start -->
<<<<<<< HEAD
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
=======
@include('sections.about')
>>>>>>> d2f87b4787d97bd8bad7428c90ae084fd4089d8c
<!-- about-area-end -->

<!-- clients-area-start -->
@include('sections.clients')
<!-- clients-area-end -->

<!-- partners-area-start -->
@include('sections.partners')
<!-- partners-area-end -->

@include('partials.footer')

<!-- JS here -->
<script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/counterup.js') }}"></script>
<script src="{{ asset('assets/js/purecounter.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.js') }}"></script>
<script src="{{ asset('assets/js/meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
<script src="{{ asset('assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.tp-slider-active', {
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });
});
</script>
