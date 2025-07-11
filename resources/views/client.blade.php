@extends('layouts.dashboard')

@section('title')
        Clients
@endsection

@section('content')
        <!-- undergraduate breadcrumb start -->
        <section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix" style="height: 450px">
            <div class="tp-breadcrumb__bg "
                 style="background: url('{{ asset('/assets/img/breadcrumb/About-.PNG') }}') no-repeat center / cover !important;"></div>
            <div class="container">
                <div class="row align-items-center">
                    {{--<div class="col-sm-12">
                        <div class="tp-breadcrumb__content">
                             <h3 class="tp-breadcrumb__title color"> About CAD Masters</h3>

                        </div>
                    </div>--}}
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
                    <h3 class="bold"><span><img src="assets/img/shop/shop-shape.svg" alt=""></span> Our Clients
                        <span><img src="assets/img/shop/shop-shape.svg" alt=""></span>
                    </h3>
                    <p>We serve the biggest names in Middle East in all construction fields.<br>
                        Our clients list contains designers, consultants, contractors, owners and investor</p>
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
    </div>
</section>
<!-- leadership area end  -->
@endsection
