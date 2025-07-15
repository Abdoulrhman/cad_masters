<!-- team-area-start -->
<section class="team-area pt-100 mb-50">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-8">
                <div class="tp-section mb-45">
                    <h5 class="tp-section-3-subtitle">Our Clients</h5>
                    <h3 class="tp-section-3-title">CAD Masters
                        <span>Clients
                            <img class="tp-underline-shape-9 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/unlerline/team-2-svg-1.svg" alt="">
                        </span>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="tp-team-2-arrow d-flex align-items-center justify-content-md-end mb-55">
                    <div class="tp-team-2-prev">
                        <span>
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 11L1 6L6 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                    <div class="tp-team-2-next">
                        <span>
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper tp-team-2-active wow fadeInUp" data-wow-delay=".5s">
            <div class="swiper-wrapper align-items-end">
                @foreach($clients as $client)
                    <div class="swiper-slide" style="height: auto; display: flex; align-items: center; justify-content: center;">
                        <div class="tp-team-2-item">
                            <div class="tp-shop-author-item text-center mb-30"
                                 style="display: flex;flex-direction: column;align-items: center;">
                                <div class="tp-shop-author-thumb" style="width: 200px;height: 200px; display: flex; align-items: center; justify-content: center;">
                                    <img src="{{ asset('storage/' . $client->image) }}" alt="{{$client->name}}" style="width: 100%; height: 100%; object-fit: contain;">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="tp-shop-author-btn" style="display: flex; justify-content: center; margin-top: 30px;">
                <a href="authorization">All Clients <span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L5 5L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                          </span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- team-area-end -->



{{--
<!-- category-area-start -->
<section class="tp-category-6-ptb pb-120 pt-60">
    <div class="container custom-container-1300">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="tp-category-6-heading mb-50 text-center wow fadeInUp" data-wow-delay=".4s">
                    <h3 class="tp-section-3-title color-9">CAD Masters
                        <span>Clients
                            <img class="tp-underline-shape-5 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s"
                                src="assets/img/shape/bottom-line/line-2-category-2.svg" alt="">
                        </span>
                    </h3>
                </div>
            </div>
        </div>
            <div class="row">
                @foreach($clients as $client)
                    <div class="col-xl-3 col-md-5 col-md-6 pr-25 pl-25">
                        <div class="tp-category-5-item mb-25">
                            <div class="tp-category-5-thumb">
                                <img src="{{ asset('storage/' . $client->image) }}" alt="{{$client->name}}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-category-6-btn text-center pt-40">
                    <div class="tp-hero-6-btn">
                        <a class="tp-btn-inner" href="client">View all Clients
                            <span>
                                <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.71533 1L13 5.28471L8.71533 9.56941" stroke="currentColor"
                                        stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M1 5.28473H12.88" stroke="currentColor" stroke-width="2"
                                        stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
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
--}}
