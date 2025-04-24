@extends('layouts.dashboard')

@section('title')
    Contact Us
@endsection

@section('content')
        <!-- undergraduate breadcrumb start -->
<section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
    <div class="tp-breadcrumb__bg overlay" style="background: url('{{ asset('/assets/img/breadcrumb/Contact-Us.PNG') }}') no-repeat center / cover !important"></div>
</section>
<!-- undergraduate breadcrumb end -->

<!-- contact area start -->
<section class="tp-contact-area tp-contact-p fix p-relative pt-150 pb-125">
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
<div class="tp-map-area">
    <div class="tp-contact-map-content">
        <iframe class="align-content-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.265097446932!2d31.35307646511229!3d30.057934799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e4352897419%3A0x4a2dfe8c6ca9a700!2z2YPYp9ivINmF2KfYs9iq2LHYsiDZhNmE2YPZiNix2LPYp9iqINin2YTZh9mG2K_Ys9mK2Kkg2YjYp9mE2KzYsdin2YHZitmD!5e0!3m2!1sar!2seg!4v1745277500856!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- map area end -->


@endsection


