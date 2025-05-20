@extends('layouts.dashboard')

@section('title')
    Authorization
@endsection

@section('content')


        <!-- undergraduate breadcrumb start -->
<section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
    <div class="tp-breadcrumb__bg" style="background: url('{{ asset('/assets/img/breadcrumb/Accreditation and Authorizations.PNG') }}') no-repeat center / cover !important"></div>
    <div class="container">

    </div>
</section>
<!-- undergraduate breadcrumb end -->

<!-- shop product area start -->
<section class="tp-shop-product-area pb-50 pt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-shop-product-tab mb-60">
                    <h3 class="bold"><span><img src="assets/img/shop/shop-shape.svg" alt=""></span> Authorized From
                        <span><img src="assets/img/shop/shop-shape.svg" alt=""></span></h3>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <!-- financial area start -->
            <div class="container">
                <div class="row">
                    @foreach($authorizations as $authorization)
                        @if($authorization->category == 'Authorized')
                            <div class="col-lg-4 col-md-6">
                                <div class="tp-financial-item mb-30">
                                    <div class="tp-financial-thumb">
                                        <img src="{{ asset('storage/' . $authorization->image) }}" alt="{{ $authorization->name }}">
                                    </div>
                                    <div class="tp-financial-content">
                                        <h4 class="tp-financial-content-title">{{ $authorization->name }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <!-- financial area end -->
        </div>
    </div>
</section>
<!-- shop product area end -->

    <!-- shop product area start -->
    <section class="tp-shop-product-area pb-50 pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-shop-product-tab mb-60">
                        <h3 class="bold"><span><img src="assets/img/shop/shop-shape.svg" alt=""></span> Member In
                            <span><img src="assets/img/shop/shop-shape.svg" alt=""></span></h3>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <!-- financial area start -->
                <div class="container">
                    <div class="row">
                        @foreach($authorizations as $authorization)
                            @if($authorization->category == 'Membership')
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-financial-item mb-30">
                                        <div class="tp-financial-thumb">
                                            <img src="{{ asset('storage/' . $authorization->image) }}" alt="{{ $authorization->name }}">
                                        </div>
                                        <div class="tp-financial-content">
                                            <h4 class="tp-financial-content-title">{{ $authorization->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!-- financial area end -->
            </div>
        </div>
    </section>
    <!-- shop product area end -->

@endsection