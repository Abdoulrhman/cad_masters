<!-- category-area-start -->
<section class="tp-category-6-ptb pb-120 pt-120">
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
                        <h4 class="tp-category-6-item-title"><a href="course-categories.html">{{ $client->name }}</a>
                        </h4>
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
