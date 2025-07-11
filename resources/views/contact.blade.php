@extends('layouts.dashboard')

@section('title')
    Contact Us
@endsection

@section('content')
        <!-- undergraduate breadcrumb start -->
{{--<section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
    <div class="tp-breadcrumb__bg overlay" style="background: url('{{ asset('/assets/img/breadcrumb/Contact-Us.PNG') }}') no-repeat center / cover !important"></div>
</section>--}}
    <section class="tp-breadcrumb__area p-relative">
        <div class="tp-breadcrumb__bg" style="background: url('{{ asset('/assets/img/breadcrumb/Contact-Us.PNG') }}') no-repeat center / contain !important"></div>
    </section>
<!-- undergraduate breadcrumb end -->

<!-- contact area start -->
<section class="tp-contact-area tp-contact-p fix p-relative pt-50 pb-125">
    <div class="tp-contact-bg" data-background="assets/img/live/contact-bg.png"></div>
    <div class="tp-contact-shape">
               <span>
                  <svg width="1920" height="559" viewBox="0 0 1920 559" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1958.7 6.55286C1332.03 310.106 2369.35 119.238 2232.58 220.873C2018.48 379.976 692.5 607.75 254.5 538.145C-27.1058 493.393 1387 130.595 -280 395.595" stroke="url(#paint0_linear_2756_1168)" stroke-width="14"/>
                      <defs>
                          <linearGradient id="paint0_linear_2756_1168" x1="92.1912" y1="171.542" x2="1827.4" y2="294.717" gradientUnits="userSpaceOnUse">
                          </linearGradient>
                      </defs>
                  </svg>
               </span>
    </div>
    <div class="tp-contact-shape-2">
        <img src="assets/img/live/contact-shape-2.svg" alt="">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="tp-contact-wrap p-relative">
                    <div class="tp-contact-heading text-center">
                        <h3 class="tp-contact-title">Get in Touch</h3>
                        <p>We are here to answer any question you may have.</p>
                    </div>
                    <div class="tp-contact-from-box">
                        <h3 class="tp-contact-from-title">Send a Message 👍🏻</h3>
                        <form id="contact-form" action="assets/mail.php" method="post">
                            <div class="tp-contact-input-form">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-contact-input p-relative">
                                            <label>Your Name</label>
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tp-contact-input p-relative">
                                            <label>Email Address</label>
                                            <input type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="tp-contact-input p-relative">
                                            <label>Subject</label>
                                            <input type="text" name="subject">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="tp-contact-input p-relative">
                                            <label>Your message</label>
                                            <textarea name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="tp-contact-input-remeber">
                                            <input id="remeber" type="checkbox">
                                            <label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </div>
                                    </div>
                                    <div class="tp-contact-btn">
                                        <button type="submit" class="tp-btn-inner">Send message</button>
                                        <p style="display: none;" class="ajax-response text-danger mt-1 mb-0"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact area end -->


    <!-- map area start -->
    <div class="tp-map-area pb-25">
        <div class="container">
            <div class="row gx-3 gy-5"> <!-- Added vertical gap between rows -->
                <!-- Cairo - Nasr City -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="location-card p-3">
                        <h3 class="location-title">* Cairo - Nasr City</h3>
                        <p class="location-info"><i class="fa fa-location-dot"></i>  2 Hassan Afify St., behind mahgub Makram Ebeid.</p>
                        <p class="location-info"><i class="fa-brands fa-whatsapp"></i> 010 000 50300 - 010 199 400 02</p>
                        <div class="map-container ratio ratio-16x9 mt-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.265097446932!2d31.35307646511229!3d30.057934799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e4352897419%3A0x4a2dfe8c6ca9a700!2z2YPYp9ivINmF2KfYs9iq2LHYsiDZhNmE2YPZiNix2LPYp9iqINin2YTZh9mG2K_Ys9mK2Kkg2YjYp9mE2KzYsdin2YHZitmD!5e0!3m2!1sar!2seg!4v1745277500856!5m2!1sar!2seg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Cairo - Downtown -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="location-card p-3">
                        <h3 class="location-title">* Cairo - Downtown</h3>
                        <p class="location-info"><i class="fa fa-location-dot"></i> Emad El-Deen St. - Ramses - Engineering Syndicate.</p>
                        <p class="location-info"><i class="fa-brands fa-whatsapp"></i> 010 000 50300 - 010 199 400 02</p>
                        <div class="map-container ratio ratio-16x9 mt-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.318732658733!2d31.244193!3d30.056397000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458409412f43067%3A0x97d7520a289f6665!2sEngineers%20Union!5e0!3m2!1sen!2seg!4v1751989283899!5m2!1sen!2seg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Alex - Smouha -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="location-card p-3">
                        <h3 class="location-title">* Alex - Smouha</h3>
                        <p class="location-info"><i class="fa fa-location-dot"></i> 8,50 Street, off Mostafa Kamel Street, Tayseer Tower.</p>
                        <p class="location-info"><i class="fa-brands fa-whatsapp"></i> 010 616 464 24 - 03 4252314 - 034251029</p>
                        <div class="map-container ratio ratio-16x9 mt-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.2091468274225!2d29.9400601!3d31.214934499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c491d007319f%3A0x6f7870af68091f04!2sCAD%20MASTERS%20ALEX!5e0!3m2!1sen!2seg!4v1746306136220!5m2!1sen!2seg" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- map area end -->

<style>

    /* Responsive fixes */
    @media (max-width: 767px) {
        .tp-map-area {
            margin-bottom: 50px !important;
            padding: 0 15px;
        }

        .location-card {
            margin-bottom: 30px;
            background: #f9f9f9;
            border-radius: 10px;
        }

        .location-title {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .location-info {
            margin-bottom: 10px;
            font-size: 0.9rem;
        }

        .map-container {
            margin-top: 15px;
        }

        /* Fix contact form on mobile */
        .tp-contact-input-form .row > div {
            margin-bottom: 15px;
        }

        .tp-contact-btn button {
            width: 100%;
        }
    }

    /* For tablets */
    @media (min-width: 768px) and (max-width: 991px) {
        .location-card {
            margin-bottom: 30px;
        }

        .map-container {
            min-height: 300px;
        }
    }

    /*breadcramp*/
    .tp-breadcrumb__area {
        display: block;
        width: 100%;
        height: 300px; /* Fixed height - adjust as needed */
        padding: 0;
        margin: 0;
        overflow: hidden;
    }

    .tp-breadcrumb__bg {
        width: 100%;
        height: 100%;
        background-position: center !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
    }

    /* Responsive height adjustments */
    @media (max-width: 767px) {
        .tp-breadcrumb__area {
            height: 100px; /* Smaller height for mobile */
        }
    }

    @media (min-width: 992px) {
        .tp-breadcrumb__area {
            height: 350px; /* Taller for desktop */
        }
    }


</style>

@endsection


