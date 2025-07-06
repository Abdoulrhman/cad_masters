{{--<!-- author area start -->
<section class="tp-shop-author-area pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-shop-author-wrap d-flex flex-wrap justify-content-between align-items-center mb-50">
                    <div class="tp-shop-author-heading">
                        <h4 class="tp-shop-author-title">Learning Partner</h4>
                        <p>The renovator is proudly partnered with</p>

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
                    <div class="tp-shop-author-btn">
                        <a href="partner">All Partners <span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L5 5L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                          </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($partners as $partner)
            <div class="col-lg-3 col-sm-6">
                <div class="tp-shop-author-item text-center mb-30"
                    style="display: flex;flex-direction: column;align-items: center;">
                    <div class="tp-shop-author-thumb" style="width: 200px;height: 200px;">
                        <img src="{{ asset('storage/' . $partner->image) }}" alt="" style="height: 100%">
                    </div>
                   --}}{{-- <div class="tp-shop-author-content">
                        <h4 class="tp-shop-author-item-title"><a href="my-profile.html">{{$partner->name}}</a></h4>
                    </div>--}}{{--
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- author area end -->--}}

<!-- team-area-start -->
<section class="team-area pt-100 mb-50">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-8">
                <div class="tp-section mb-45">
                    <h5 class="tp-section-3-subtitle">Learning Partner</h5>
                    <h3 class="tp-section-3-title">Meet Our
                        <span>Partners
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
                @foreach($partners as $partner)
                    <div class="swiper-slide" style="height: auto; display: flex; align-items: center; justify-content: center;">
                        <div class="tp-team-2-item">
                            <div class="tp-shop-author-item text-center mb-30"
                                 style="display: flex;flex-direction: column;align-items: center;">
                                <div class="tp-shop-author-thumb" style="width: 200px;height: 200px; display: flex; align-items: center; justify-content: center;">
                                    <img src="{{ asset('storage/' . $partner->image) }}" alt="{{$partner->name}}" style="width: 100%; height: 100%; object-fit: contain;">
                                </div>
                                {{-- <div class="tp-shop-author-content">
                                     <h4 class="tp-shop-author-item-title"><a href="my-profile.html">{{$partner->name}}</a></h4>
                                 </div>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="tp-shop-author-btn" style="display: flex; justify-content: center; margin-top: 30px;">
                <a href="partner">All Partners <span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 9L5 5L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                          </span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- team-area-end -->
