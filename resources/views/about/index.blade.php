@extends('layouts.dashboard')



@section('title')
    About US
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


<main>
    <!-- Hero section start -->
    <section class="tp-about-tutor-area pt-110 pb-90">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <div class="tp-about-tutor-heading mb-60">
                        <div class="tp-about-tutor-subtitle d-flex align-items-center">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                               <path d="M1 10H19" stroke="#2D4CFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                               <path d="M10 19C14.9706 19 19 14.9706 19 10C19 5.02944 14.9706 1 10 1C5.02944 1 1 5.02944 1 10C1 14.9706 5.02944 19 10 19Z" stroke="#2D4CFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                               <path d="M9.9999 1C12.2511 3.46452 13.5304 6.66283 13.5999 10C13.5304 13.3372 12.2511 16.5355 9.9999 19C7.74875 16.5355 6.46942 13.3372 6.3999 10C6.46942 6.66283 7.74875 3.46452 9.9999 1Z" stroke="#2D4CFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                           </svg></span>
                            <p>About CAD Masters</p>
                        </div>
                        <h3 class="tp-about-tutor-title">Ensuring Engineering Success. Together.</h3>
                        <p class="mt-30">
                            CAD MASTERS is a specialized company in training, technical support and services for engineering and graphics software.
                            Since 2007 till now CAD MASTERS has adopted a new approach for the integrated solutions in CAD & BIM technology by implementing strategies based on commitment,
                            quality, customer satisfaction and high return on investment. During this period CAD MASTERS has expanded its services in Egypt and Gulf.
                            On 2013 CAD MASTERS opened its office in Kuwait to deliver the most updated services to its customers at Gulf area.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="tp-about-tutor-thumb">
                        <img style="width:100%" src="{{ asset('assets/img/about/About-Us-001.jpg') }}"
                            alt="Autodesk Gold Partner">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="tp-about-tutor-heading mb-60">
                        <p class="mt-30">
                            CAD MASTERS is authorized from the most reputable engineering software companies such as: Autodesk, Bentley, Adobe, Rhinoceros and Maxwell render.
                            CAD MASTERS; in order to achieve this success has dedicated its resources and experience in both technical and teaching fields.
                            So our team has a deep practical and teaching skills.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 pb-95">
                    <div class="">
                       {{-- @if($companyProfile)
                            <div class="tp-contact-btn text-center">
                                <a href="{{ asset('storage/' . $companyProfile->file_path) }}" class="tp-btn"
                                   download="{{ $companyProfile->file_name }}">
                                    <i class="fas fa-download me-2"></i> Download Company Profile
                                </a>
                            </div>
                        @endif--}}

                        @if($companyProfile)
                            <div class="tp-contact-btn text-center">
                                <a href="{{ asset('storage/' . $companyProfile->file_path) }}" class="tp-btn"
                                   download="{{ $companyProfile->file_name }}">
                                    <i class="fas fa-download me-2"></i> Download Company Profile
                                </a>
                            </div>
                        @else
                            <div class="alert alert-info text-center">
                                <i class="fas fa-info-circle me-2"></i> No company profile uploaded yet
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- tutor area start -->
    <section class="tp-about-tutor-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="tp-our-mission-thumb wow fadeInUp" data-wow-delay=".3s">
                        <img src="assets/img/our-mission/thumb-1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="tp-tutor-item about text-center mb-30">
                        <div class="tp-tutor-icon">
                           <span><svg xmlns="http://www.w3.org/2000/svg" width="42" height="30" viewBox="0 0 42 30" fill="none">
                                   <path d="M40.4192 10.2148C41.0286 10.0341 41.1715 9.69793 41.1841 9.44579C41.1967 9.20197 41.0958 8.8616 40.5285 8.60946L23.9112 1.2085C22.8773 0.746307 21.8225 0.162038 20.6373 0.0318053C19.3346 -0.111111 18.0821 0.250341 16.9222 0.662205C11.0847 2.21724 7.66372 3.90242 2.00272 5.97435C0.56532 6.49972 -0.153302 7.33597 0.0274239 8.26481C0.182943 9.06753 0.956179 9.4836 1.60766 9.75675C4.28478 10.8788 7.10473 11.7194 9.80698 12.602C8.04189 15.0731 7.09205 17.8174 6.85251 21.2006C6.83991 21.3898 6.95334 21.5621 7.12986 21.6251L19.7631 26.1471H19.7715C19.8135 26.1639 19.8598 26.1723 19.9059 26.1723C19.9522 26.1723 19.9983 26.1639 20.0404 26.1471H20.0488L32.682 21.6251C32.8626 21.5621 32.9762 21.3898 32.9594 21.2006C32.7324 18.0234 32.2491 15.7456 30.4252 13.1862L37.1241 11.1941C37.0779 14.0982 37.0485 13.9259 36.9981 16.9686C35.9978 17.0905 35.1742 17.6327 34.7539 18.4689C34.5522 18.864 34.4556 19.3136 34.4556 19.7634C34.4556 20.3433 34.6152 20.9317 34.9347 21.4361C35.2372 21.9151 35.6786 22.3018 36.1786 22.5665C35.4684 24.6427 35.0818 26.5339 34.3674 28.5385C34.1446 29.1521 34.4136 29.5976 35.1197 29.6522L39.6417 29.9967C40.3561 30.0514 40.9403 29.4084 40.8016 28.694C40.3352 26.2775 39.8266 24.3526 39.1668 22.5077C39.4736 22.3311 39.7509 22.1042 39.9736 21.8268C40.7134 20.9275 40.8521 19.5826 40.3099 18.5487C39.8559 17.6788 38.9188 17.0736 37.8387 16.9601C37.8933 13.8039 37.9186 14.0519 37.9689 10.9419L40.4192 10.2148ZM24.4029 11.7908C24.5079 11.753 24.6298 11.8076 24.6676 11.9168C24.7096 12.0303 24.6508 12.1479 24.5415 12.1858L21.2845 13.3373C21.1752 13.3751 21.0575 13.3163 21.0155 13.207C20.9776 13.0977 21.0365 12.9801 21.1458 12.9381L24.4029 11.7908ZM19.2462 7.67222C19.9985 7.28136 20.9273 7.57971 21.5703 8.11349C22.1334 8.58417 22.0746 9.21457 21.4484 9.51712C20.944 9.76095 19.8388 9.76095 19.2462 9.45831C18.3721 9.00864 18.4898 8.06728 19.2462 7.67222ZM5.45736 8.60097C4.46131 8.23112 4.44862 7.5335 4.95299 7.09215C5.16312 6.90722 5.42367 6.819 5.65061 6.73498L11.9672 4.48653C12.0807 4.44872 12.1983 4.50334 12.2362 4.61264C12.274 4.72195 12.2193 4.84378 12.1101 4.88159L5.78932 7.13004C5.58759 7.20566 5.38166 7.27716 5.23042 7.40739C5.12111 7.50401 5.02449 7.67642 5.0623 7.82346C5.11691 8.00418 5.35233 8.11349 5.60439 8.20599L10.8115 10.1265C10.9208 10.1686 10.9754 10.2904 10.9375 10.3997C10.8955 10.5091 10.7736 10.5636 10.6644 10.5216L5.45736 8.60097ZM11.8748 10.9881C11.8075 11.0805 11.6773 11.1016 11.5847 11.0301L11.3284 10.841C11.2318 10.7737 11.2149 10.6393 11.2821 10.5468C11.3536 10.4544 11.4838 10.4334 11.5763 10.5049L11.8327 10.694C11.9252 10.7611 11.9462 10.8956 11.8748 10.9881ZM32.098 20.9442L19.9061 25.3066L7.71413 20.9442C7.98736 17.7754 8.92872 15.1949 10.6392 12.8793C12.005 13.3332 13.3709 13.8164 14.6947 14.367C16.3674 15.0646 18.0232 15.8673 19.8514 15.9051C21.1627 15.9303 22.352 15.5816 23.6128 15.2075L29.568 13.4382C31.3541 15.8548 31.8668 17.9897 32.098 20.9442ZM31.6315 7.41159C31.5852 7.5209 31.4633 7.56711 31.3583 7.5209L25.5712 4.9951C25.4661 4.94889 25.4199 4.82706 25.4661 4.71775C25.5124 4.61272 25.6343 4.56643 25.7435 4.61272L31.5263 7.13852C31.6315 7.18465 31.6777 7.30657 31.6315 7.41159ZM39.9779 28.8536C40.0074 29.0175 39.8771 29.1687 39.7048 29.1561L35.1828 28.8116H35.1618C35.8888 26.7648 36.2586 24.9367 36.9647 22.8564C37.4396 22.9657 37.8935 22.9572 38.3894 22.827C39.0239 24.6173 39.5199 26.4959 39.9779 28.8536Z" fill="#4661FD"/>
                               </svg></span>
                        </div>
                        <div class="tp-tutor-content" style="max-height: 200px!important;">
                            <h4 class="tp-tutor-title"><a href="#">Vision</a></h4>
                            <p>To participate in the advancement of the engineering industry in the Middle East by implementing the latest
                                software and tools, in addition to training and graduating highly qualified human resources.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="tp-tutor-item about text-center mb-30">
                        <div class="tp-tutor-icon">
                           <span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="35" viewBox="0 0 40 35" fill="none">
                                   <path d="M39.3297 8.95436C38.2787 6.05524 36.3219 3.46143 33.826 1.64819C32.6919 0.828561 31.6342 0.393957 30.6654 0.341927C30.6522 0.339971 30.6044 0.335567 30.5919 0.337764C28.7768 0.27233 27.7574 1.48872 26.6763 2.91316C26.5294 3.0761 23.8914 6.89565 19.0609 9.99224C19.0575 9.99713 19.0533 9.99786 19.0499 10.0027C19.0499 10.0027 19.0458 10.0035 19.0417 10.0042L13.1065 14.2937C13.103 14.2985 13.0996 14.3035 13.0955 14.3042C13.0962 14.3084 13.0921 14.3091 13.0879 14.3098C8.63483 17.9182 4.15945 19.2385 3.98062 19.3172C2.82944 19.7129 1.52826 20.1566 0.771168 21.2325C0.0106555 22.3133 -0.0701696 23.8226 0.53298 25.7128C1.47055 28.649 3.32119 31.3215 5.74388 33.2291C6.9478 34.1777 8.43587 34.9392 9.91817 34.5751C11.2413 34.256 12.1375 33.1427 12.9246 32.1643C13.1484 31.9277 15.8468 28.2562 20.9053 24.7766C20.9094 24.7759 20.9087 24.7717 20.9087 24.7717C20.9467 24.7436 22.2013 23.8413 22.2013 23.8413C22.53 26.6536 23.1218 29.2567 24.092 32.1829C24.1469 32.3489 24.2999 32.4632 24.4727 32.4713C24.6455 32.4795 24.8083 32.3822 24.879 32.2241L25.9627 29.8181L28.9244 32.1833C29.0495 32.2855 29.2245 32.306 29.3785 32.2317C29.5234 32.1547 29.6163 32.0012 29.6086 31.8356C29.4931 29.0671 29.0812 26.4879 28.6117 23.996C31.3646 25.5411 32.118 26.0723 35.936 27.5112C36.0918 27.5693 36.265 27.5302 36.3818 27.4154C36.4979 27.2965 36.5358 27.1226 36.4789 26.9699L35.1623 23.415L37.783 23.1414C37.9555 23.1238 38.1007 22.9996 38.1484 22.8328C38.192 22.6666 38.1299 22.4847 37.9916 22.3806C35.5217 20.5455 33.2351 19.1666 30.677 17.9726C32.3658 17.0065 34.1213 16.1744 35.9287 15.4915L36.0656 15.4417C37.7852 14.7957 39.2849 14.1415 39.7077 12.3362L39.7111 12.3313C39.7192 12.3042 39.7224 12.2737 39.7264 12.2473C39.9193 11.3265 39.7939 10.2263 39.3297 8.95436ZM12.2703 31.637C11.5278 32.5519 10.7612 33.5009 9.71837 33.7577C8.72463 34.0015 7.56942 33.5968 6.26549 32.5672C3.97619 30.7604 2.22408 28.2333 1.33576 25.4554C0.817628 23.8289 0.861364 22.5702 1.46094 21.7191C2.06051 20.8679 3.17577 20.487 4.25016 20.1177C4.47673 20.0178 8.72937 18.771 13.1514 15.3266C14.6277 19.4231 16.8948 22.4891 19.9096 24.4508C15.19 27.8107 12.8066 31.0583 12.2703 31.637ZM19.5298 21.2278C19.4607 21.3214 19.3326 21.3483 19.2348 21.2798C17.3817 19.9787 16.0499 17.9644 15.5817 15.7465C15.5578 15.635 15.6282 15.5241 15.7438 15.4994C15.858 15.4665 15.9703 15.5451 15.995 15.6608C16.4401 17.7715 17.7087 19.6941 19.4779 20.9328C19.5714 21.0019 19.5949 21.1349 19.5298 21.2278ZM20.4663 21.898C20.4069 21.9985 20.2761 22.0344 20.1757 21.975L19.8221 21.7675C19.7216 21.708 19.6858 21.5773 19.7452 21.4769C19.8045 21.3764 19.9361 21.3447 20.0365 21.4041L20.39 21.6116C20.4905 21.671 20.5215 21.7983 20.4663 21.898ZM33.734 4.40611C34.3063 4.78499 34.8148 5.31222 35.2055 5.92446C35.5083 6.40226 35.933 6.94007 36.1259 7.54865C36.3025 8.11292 36.2605 8.87008 35.7608 9.29228C35.0705 9.87237 34.215 9.46635 33.5545 8.85458C32.9612 8.30803 32.4529 7.66085 32.0417 6.93213C31.8365 6.56991 31.5961 6.08111 31.5729 5.53681C31.5432 4.88233 31.8686 4.29799 32.3677 4.11576C32.7616 3.9693 33.2244 4.06756 33.734 4.40611ZM29.8249 4.05444C29.7966 3.40826 30.0167 2.83392 30.4198 2.47157C30.9164 2.03277 31.6679 1.99448 32.1266 2.3848C32.2168 2.45892 32.2277 2.59402 32.1537 2.68424C32.079 2.77022 31.9438 2.78121 31.8536 2.70717C31.5613 2.45887 31.0325 2.49637 30.703 2.79007C30.3948 3.05862 30.2243 3.52564 30.2458 4.0359C30.283 4.90326 30.7947 5.69133 31.2465 6.38273C31.3112 6.48266 31.2827 6.61197 31.1868 6.67598C31.0868 6.74072 30.9576 6.71212 30.8936 6.61626C30.4354 5.91305 29.8653 5.03687 29.8249 4.05444ZM28.7136 30.9396L26.065 28.8191C25.9609 28.7389 25.8308 28.7061 25.7042 28.7413C25.5768 28.7723 25.4723 28.8593 25.4158 28.9764L24.5596 30.8753C23.7521 28.2632 23.2613 25.8692 22.9838 23.2749C23.827 22.6635 26.3962 20.8096 27.0375 20.3409C27.141 20.8796 27.2446 21.4183 27.3537 21.9645C27.9224 24.8245 28.5063 27.7717 28.7136 30.9396ZM35.7674 14.6505L35.6312 14.7045C32.4457 15.9045 29.4168 17.5566 26.6124 19.6062C23.5308 17.7035 21.2403 14.6501 19.7955 10.5138C24.5831 7.36908 27.2056 3.58234 27.349 3.4243C27.5709 3.12807 27.7971 2.83116 28.0351 2.55366C27.8989 3.4815 28.1715 4.37168 28.4686 5.13327C29.6901 8.24658 31.8028 10.8985 34.5681 12.8056C35.2647 13.2825 36.1122 13.7885 37.1157 13.9158C37.2205 13.9272 37.3198 13.9312 37.4224 13.9303C36.9161 14.2165 36.3382 14.4384 35.7674 14.6505Z" fill="#4661FD"/>
                               </svg></span>
                        </div>
                        <div class="tp-tutor-content" style="max-height: 200px!important;">
                            <h4 class="tp-tutor-title"><a href="#">Mission</a></h4>
                            <p>To be a professional company and a research center for training, technical support and solutions
                                specialized in CAD, CAM, BIM and graphic technology.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tutor area end -->

    <!-- Counter section start -->
    <section class="tp-counter-area" style="background-color: #4661FD;">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="tp-counter-item mb-30">
                        <h4 class="tp-counter-number text-white"><span class="purecounter" data-purecounter-duration="1"
                                data-purecounter-end="36">0</span>+</h4>
                        <p class="text-white">Training Courses</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="tp-counter-item mb-30">
                        <h4 class="tp-counter-number text-white"><span class="purecounter" data-purecounter-duration="1"
                                data-purecounter-end="2">0</span></h4>
                        <p class="text-white">Training Locations</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="tp-counter-item mb-30">
                        <h4 class="tp-counter-number text-white">Gold</h4>
                        <p class="text-white">Autodesk Partner</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="tp-counter-item mb-30">
                        <h4 class="tp-counter-number text-white">#1</h4>
                        <p class="text-white">AEC Instructor 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter section end -->

    <!-- Services section start -->
    <section class="tp-service-area pt-120 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="tp-service-item mb-30">
                        <div class="tp-service-icon">
                            <i class="fas fa-laptop-code fa-3x text-primary"></i>
                        </div>
                        <h4 class="tp-service-title">Software Solutions</h4>
                        <p>CAD Masters specializes in the AEC and GIS marketplaces. Our dedicated account
                            representatives, registered engineers, and CAD experts guide you in the purchase and
                            maintenance of your Autodesk subscription software.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-service-item mb-30">
                        <div class="tp-service-icon">
                            <i class="fas fa-chalkboard-teacher fa-3x text-primary"></i>
                        </div>
                        <h4 class="tp-service-title">Professional CAD Training</h4>
                        <p>We offer 36 different in-person and online professional CAD training courses, from beginner
                            to advanced topics. Courses cover Autodesk's AEC Industry Collection software, including
                            AutoCAD, Civil 3D, Revit, and more.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tp-service-item mb-30">
                        <div class="tp-service-icon">
                            <i class="fas fa-cogs fa-3x text-primary"></i>
                        </div>
                        <h4 class="tp-service-title">Engineering & Consulting</h4>
                        <p>Our engineers help with project planning and setup in BIM environments of Civil 3D or Revit.
                            We provide training and project support, either continuously as project managers or as
                            needed for specific issues.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section end -->

    <!-- Hardware section start -->
    <section class="tp-feature-area pt-120 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-feature-content mb-30">
                        <h3 class="tp-feature-title">CAD Workstations</h3>
                        <p>Through our experience in training, technical support, and engineering work, CAD Masters has
                            developed deep knowledge of the hardware necessary for engineers, architects, surveyors, and
                            drafters to do their best work.</p>
                        <div class="tp-feature-list">
                            <ul>
                                <li><i class="fas fa-check"></i> Standard Workstation for AutoCAD users</li>
                                <li><i class="fas fa-check"></i> Premium Workstation for AutoCAD, Civil 3D, and Revit
                                    users</li>
                                <li><i class="fas fa-check"></i> Premium+ Workstation for all Autodesk products</li>
                                <li><i class="fas fa-check"></i> Ultimate Workstation for drone and Lidar data
                                    processing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-feature-content mb-30">
                        <h3 class="tp-feature-title">Technical Support</h3>
                        <p>Our award-winning technical support via phone, email, or remote web assistance is free with
                            any Autodesk software subscription, and includes:</p>
                        <div class="tp-feature-list">
                            <ul>
                                <li><i class="fas fa-check"></i> Installation and licensing assistance</li>
                                <li><i class="fas fa-check"></i> Troubleshooting software and drawing errors</li>
                                <li><i class="fas fa-check"></i> Brief how-to's and software usage pointers</li>
                                <li><i class="fas fa-check"></i> Purchase technical support in time blocks</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hardware section end -->

</main>
@endsection

@push('styles')
<style>
.tp-service-item {
    padding: 40px 30px;
    border-radius: 10px;
    background-color: #fff;
    transition: all 0.3s ease;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.tp-service-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.tp-service-icon {
    margin-bottom: 20px;
}

.tp-counter-item {
    text-align: center;
}

.tp-counter-number {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 10px;
}

.tp-feature-list ul li {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.tp-feature-list ul li i {
    color: #4661FD;
    margin-right: 10px;
}

.tp-contact-item {
    padding: 30px;
    border-radius: 10px;
    background-color: #f8f9fa;
}

.tp-contact-item h4 {
    margin-bottom: 15px;
    color: #4661FD;
}

.tp-about-tutor-thumb img {
    width: 100%;
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
}
</style>
@endpush
