@extends('layouts.dashboard')

@section('title')
   Media & Events
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

<!-- media gallery area start -->
<section class="tp-shop-product-area pb-50 pt-50">
    <div class="container">
        <div class="row">
            @foreach($albums as $album)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="tp-financial-item">
                        <div class="tp-financial-thumb">
                            <a href="{{ route('media.albums.show', $album->slug) }}">
                                @if($album->cover_image)
                                    <img src="{{ asset('storage/' . $album->cover_image) }}"
                                         alt="{{ $album->title }}"
                                         class="img-fluid"
                                         style="height: 250px; width: 100%; object-fit: cover;">
                                @else
                                    <div class="bg-light text-center p-4" style="height: 250px;">
                                        <i class="fas fa-images fa-3x text-secondary mt-5"></i>
                                    </div>
                                @endif
                            </a>
                        </div>
                        <div class="tp-financial-content">
                            <h4 class="tp-financial-content-title">
                                <a href="{{ route('media.albums.show', $album->slug) }}" class="text-decoration-none">
                                    {{ $album->title }}
                                </a>
                            </h4>
                            @if($album->description)
                                <p class="mt-2">{{ Str::limit($album->description, 100) }}</p>
                            @endif
                            <div class="mt-3">
                                <a href="{{ route('media.albums.show', $album->slug) }}" class="btn btn-primary">
                                    View Album
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- media gallery area end -->
@endsection
