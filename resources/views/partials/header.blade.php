<!-- header-area-start -->
<header class="header-area p-relative">
    <div id="header-sticky" class="tp-header-2 ">
        <div class="container custom-container-larg">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-6">
                    <div class="tp-header-2-right d-flex align-items-center">
                        <div class="tp-header-inner-logo tp-header-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/logo/logo-black.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-7 col-lg-6 d-none d-xl-block">
                    <div class="main-menu text-xl-center d-none d-xl-block">
                        <nav class="tp-main-menu-content">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About Us</a></li>
                                <li><a href="{{ url('courses') }}">Courses</a></li>
                                <li><a href="{{ url('media') }}">Media</a></li>
                                <li><a href="{{ url('careers') }}">Careers</a></li>
                                <li><a href="{{ url('contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-2 col-lg-6 col-6">
                    <div class="tp-header-2-contact d-flex align-items-center justify-content-end">
                        <div class="tp-header-inner-login tp-header-user-hover">
                            @if(Auth::check())
                            <button><img src="{{ asset('assets/img/event/user.jpg') }}" alt=""></button>
                            <div class="tp-header-user-box">
                                <div class="tp-header-user-content">
                                    <div class="tp-header-user-profile d-flex align-items-center">
                                        <div class="tp-header-user-profile-thumb">
                                            <img src="{{ asset('assets/img/event/user.jpg') }}" alt="">
                                        </div>
                                        <div class="tp-header-user-profile-content">
                                            <h4>{{ Auth::user()->name }}</h4>
                                            <span>{{ Auth::user()->role ?? 'User' }}</span>
                                        </div>
                                    </div>
                                    <div class="tp-header-user-list">
                                        <ul>
                                            <li><a href="{{ url('dashboard') }}">My Dashboard</a></li>
                                            <li><a href="{{ url('profile') }}">My Profile</a></li>
                                            <li><a href="{{ url('enrollments') }}">Enrolled Courses</a></li>
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button type="submit">Logout</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @else
                            <a class="tp-btn-inner" href="{{ url('login') }}">Login</a>
                            @endif
                        </div>
                        <div class="offcanvas-btn d-xxl-none ml-30">
                            <button class="offcanvas-open-btn"><i class="fa-solid fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->
