@extends('layouts.dashboard')

@section('title')
Certificates
@endsection

@section('content')


<!-- undergraduate breadcrumb start -->
<section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
    <div class="tp-breadcrumb__bg overlay" data-background="{{url('assets/img/breadcrumb/campus-breadcrumb1.jpg')}}">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="tp-breadcrumb__content">
                    <h3 class="tp-breadcrumb__title color">Certificate awards & Thanking</h3>
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
                    <h3 class="bold"><span><img src="assets/img/shop/shop-shape.svg" alt=""></span> Certificate awards &
                        Thanking <span><img src="assets/img/shop/shop-shape.svg" alt=""></span></h3>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <div class="row">
                    @foreach ($certificates as $certificate)
                    <div class="col-lg-3 col-sm-6">
                        <div class="tp-shop-product-item text-center mb-50">
                            <div class="tp-shop-product-thumb p-relative">
                                <a href="{{ asset('storage/' . $certificate->image) }}"><img
                                        src="{{ asset('storage/' . $certificate->image) }}" alt=""></a>
                                <h4 class="tp-shop-product-title"><a href="shop-details.html">{{$certificate->name}}</a>
                                </h4>
                            </div>
                            <div class="tp-shop-product-content">

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop product area end -->

@endsection
