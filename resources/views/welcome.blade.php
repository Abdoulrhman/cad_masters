@extends('layouts.dashboard')

@section('title')
    Home
@endsection

@section('content')

<!-- hero-area-start -->
<section class="tp-hero-area">
    <div class="swiper tp-slider-active">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
            <div class="swiper-slide">
                <div class="tp-hero-item"
                    style="background-image: url('{{ $slider->image ? asset('storage/' . $slider->image) : asset('storage/carousel_images/default-slider.jpg') }}'); background-size: cover; background-position: center;">
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
@include('sections.about')
<!-- about-area-end -->

<!-- clients-area-start -->
@include('sections.clients')
<!-- clients-area-end -->

<!-- partners-area-start -->
@include('sections.partners')
<!-- partners-area-end -->



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
@endsection