@include('partials.head')
@include('partials.header')

<!-- breadcrumb start -->
<section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
    <div class="tp-breadcrumb__bg overlay"
        style="background-image: url('{{ $album->cover_image ? asset('storage/' . $album->cover_image) : url('assets/img/breadcrumb/campus-breadcrumb1.jpg') }}');">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="tp-breadcrumb__content">
                    <div class="tp-breadcrumb__link mb-10">
                        <span class="breadcrumb-item-active"><a href="{{ route('media.index') }}"
                                class="text-white">Media Gallery</a></span>
                    </div>
                    <h3 class="tp-breadcrumb__title text-white">{{ $album->title }}</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<!-- media gallery area start -->
<section class="tp-shop-product-area pb-50 pt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-shop-product-tab mb-4">
                    @if($album->description)
                    <div class="album-description mb-4">
                        <p>{{ $album->description }}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($album->media as $media)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="tp-financial-item">
                    <div class="tp-financial-thumb">
                        @if(str_starts_with($media->mime_type, 'image/'))
                        <a href="{{ asset('storage/' . $media->file_path) }}" data-fancybox="gallery">
                            <img src="{{ asset('storage/' . $media->file_path) }}" alt="{{ $media->title }}"
                                class="img-fluid">
                        </a>
                        @else
                        <div class="file-preview p-4 text-center">
                            <i class="fas fa-file fa-3x mb-2"></i>
                            <a href="{{ asset('storage/' . $media->file_path) }}" class="d-block" target="_blank">
                                Download File
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="tp-financial-content">
                        <h4 class="tp-financial-content-title">{{ $media->title }}</h4>
                        @if($media->description)
                        <p class="mt-2">{{ $media->description }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- media gallery area end -->

@push('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
Fancybox.bind("[data-fancybox]", {
    // Your custom options
});
</script>
@endpush

@include('partials.footer')
