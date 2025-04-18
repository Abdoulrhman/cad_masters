@include('partials.head')
@include('partials.header')

@section('content')


        <!-- undergraduate breadcrumb start -->
<section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
    {{--style="background: url('/assets/img/breadcrumb/image2.jpeg') center/cover no-repeat !important; "--}}
    <div class="tp-breadcrumb__bg" style="background: url('/assets/img/breadcrumb/image2.jpeg') center/cover no-repeat !important; "></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="tp-breadcrumb__content">
                    <h3 class="tp-breadcrumb__title color"> Our Clients</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- undergraduate breadcrumb end -->

<!-- leadership area start  -->
<section class="tp-leadership-area grey-bg pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-shop-product-tab mb-60">
                    <h3 class="bold"><span><img src="assets/img/shop/shop-shape.svg" alt=""></span>  Our Clients <span><img src="assets/img/shop/shop-shape.svg" alt=""></span></h3>
                    <p>We serve the biggest names in Middle East in all construction fields.<br>
                        Our clients list contains designers, consultants, contractors, owners and investor</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($clients as $client)
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="tp-leadership-item mb-55 wow fadeInUp" data-wow-delay=".3s">
                    <div class="tp-leadership-thumb p-relative">
                        <img src="{{ asset('storage/' . $client->image) }}" alt="">
                    </div>
                    <div class="tp-leadership-content">
                        <h4 class="tp-leadership-title"><a href="{{ asset('storage/' . $client->image) }}">{{$client->name}}</a></h4>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</section>
<!-- leadership area end  -->


@include('partials.footer')