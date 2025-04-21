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
                        <a href="instructor.html">All Partners <span><svg width="6" height="10" viewBox="0 0 6 10"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9L5 5L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg></span></a>
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
