@include('partials.head')
@include('partials.header')

@section('content')


        <!-- undergraduate breadcrumb start -->
<section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
    <div class="tp-breadcrumb__bg overlay" data-background="{{ asset('assets/img/breadcrumb/image.jpg') }}}"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="tp-breadcrumb__content">
                    <h3 class="tp-breadcrumb__title color">Accreditation, Authorizations and membership</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- undergraduate breadcrumb end -->

<!-- shop product area start -->
<section class="tp-shop-product-area pb-50 pt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-shop-product-tab mb-60">
                    <h3 class="bold"><span><img src="assets/img/shop/shop-shape.svg" alt=""></span> Accreditation, Authorizations and membership
                        <span><img src="assets/img/shop/shop-shape.svg" alt=""></span></h3>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <!-- financial area start -->
            <div class="container">
                <div class="row">
                    @foreach($authorizations as $authorization)
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-financial-item mb-30">
                            <div class="tp-financial-thumb">
                                <img src="{{ asset('storage/' . $authorization->image) }}" alt="">
                            </div>
                            <div class="tp-financial-content">
                                <h4 class="tp-financial-content-title">{{$authorization->name}}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- financial area end -->
        </div>
    </div>
</section>
<!-- shop product area end -->


@include('partials.footer')