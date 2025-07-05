@extends('layouts.dashboard')

@section('title')
    Partner
    @endsection

    @section('content')
            <!-- undergraduate breadcrumb start -->
    <section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
        <div class="tp-breadcrumb__bg overlay"
             style="background: url('{{ asset('/assets/img/breadcrumb/Contact-Us.PNG') }}') no-repeat center / cover !important"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="tp-breadcrumb__content">
                        <h3 class="tp-breadcrumb__title color"> Our Partner</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- undergraduate breadcrumb end -->

    <!-- leadership area start  -->
    <section class="tp-leadership-area pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-shop-product-tab mb-60">
                        <h3 class="bold"><span><img src="assets/img/shop/shop-shape.svg" alt=""></span> Our Partner
                            <span><img src="assets/img/shop/shop-shape.svg" alt=""></span>
                        </h3>
                        <p>We serve the biggest names in Middle East in all construction fields.<br>
                            Our clients list contains designers, consultants, contractors, owners and investor</p>
                    </div>
                </div>
            </div>


            <div class="row wow fadeInUp" data-wow-delay=".3s">
                @foreach($partners as $partner)
                <div class="col-xl-3 col-lg-4 col-md-6 pr-50">
                    <div class="tp-category-5-item mb-60">
                        <div class="tp-category-5-hover"></div>
                        <div class="tp-category-5-thumb">
                            <img src="{{ asset('storage/' . $partner->image) }}" alt="{{$partner->name}}">
                        </div>
                        {{--<div class="tp-category-5-content">
                            <h4 class="tp-category-5-title">
                                <a href="">{{$partner->name}}
                                 <span>
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 7H13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 1L13 7L7 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                 </span>
                                </a>
                            </h4>
                        </div>--}}
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!-- leadership area end  -->
@endsection
