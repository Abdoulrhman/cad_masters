{{--<!-- header-area-start -->
<header class="header-area p-relative">
    <div id="header-sticky" class="tp-header-2 ">
        <div class="container custom-container-larg">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-6">
                    <div class="tp-header-2-right d-flex align-items-center">
                        <div class="tp-header-inner-logo tp-header-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/logo/CAD Masters Drak.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-7 col-lg-6 d-none d-xl-block">
                    <div class="main-menu text-xl-center d-none d-xl-block">
                        <nav class="tp-main-menu-content">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="has-dropdown">
                                    <a href="{{ url('about') }}">About Us</a>
                                    <div class="tp-megamenu-main">
                                        <div class="megamenu-demo-small p-relative">
                                            <div class="tp-megamenu-small-content">
                                                <div class="row tp-gx-50">
                                                    <div class="col-xl-6">
                                                        <div class="tp-megamenu-list yellow-color">
                                                            <a href="{{ url('about') }}">About CAD Masters</a>
                                                            <a href="{{ url('authorization') }}">Accreditation,
                                                                Authorizations and membership</a>
                                                            <a href="{{ url('award') }}">Certificate awards &
                                                                Thanking</a>
                                                            <a href="{{ url('client') }}">Our Clients</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has-dropdown">
                                    <a href="{{ url('courses') }}"> courses</a>
                                    <div class="tp-megamenu-main">
                                        <div class="megamenu-demo-small p-relative">
                                            <div class="tp-megamenu-small-content">
                                                <div class="row tp-gx-50">
                                                    <div class="col-xl-6">
                                                        <div class="tp-megamenu-list yellow-color">
                                                            <a href="{{ url('architecture') }}">Architecture</a>
                                                            <a href="{{ url('structure') }}">Structure & Civil</a>
                                                            <a href="{{ url('mechanical') }}"> Mechanical & MEP</a>
                                                            <a href="{{ url('mechanical') }}"> Management & Site</a>
                                                            <a href="{{ url('management') }}"> Electrical</a>
                                                            <a href="{{ url('bim') }}">Bim Tracks</a>
                                                            <a href="{{ url('graphics') }}">Graphics</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ url('media') }}">Media</a></li>
                                <li><a href="{{ route('careers.index') }}">Careers</a></li>
                                <li><a href="{{ url('contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-2 col-lg-6 col-6">
                    <div class="tp-header-2-contact d-flex align-items-center justify-content-end">
                        <div class="tp-header-search" style="margin-right: 20px; position: relative;">
                            <input type="text" id="course-search" class="form-control" placeholder="Search courses..."
                                autocomplete="off" style="width: 220px;">
                            <div id="course-search-results" class="list-group"
                                style="position: absolute; z-index: 1000; width: 100%; display: none;"></div>
                        </div>
                        @auth
                        <div class="tp-header-inner-login tp-header-user-hover">
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

                                            <li>
                                                <a>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type="submit">Logout</button>
                                                    </form>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->--}}



        <!-- header-area-start -->
<header class="header-area p-relative">
    <div id="header-sticky" class="tp-header-2 ">
        <div class="container custom-container-larg">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-6">
                    <div class="tp-header-2-right d-flex align-items-center">
                        <div class="tp-header-inner-logo tp-header-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/img/logo/CAD Masters Drak.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-7 col-lg-6 d-none d-xl-block">
                    <div class="main-menu text-xl-center d-none d-xl-block">
                        <nav class="tp-main-menu-content">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="has-dropdown">
                                    <a href="{{ url('about') }}">About Us</a>
                                    <div class="tp-megamenu-main">
                                        <div class="megamenu-demo-small p-relative">
                                            <div class="tp-megamenu-small-content">
                                                <div class="row tp-gx-50">
                                                    <div class="col-xl-6">
                                                        <div class="tp-megamenu-list yellow-color">
                                                            <a href="{{ url('about') }}">About CAD Masters</a>
                                                            <a href="{{ url('authorization') }}">Accreditation,
                                                                Authorizations and membership</a>
                                                            <a href="{{ url('award') }}">Certificate awards &
                                                                Thanking</a>
                                                            <a href="{{ url('client') }}">Our Clients</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="has-dropdown">
                                    <a href="{{ url('courses') }}"> courses</a>
                                    <div class="tp-megamenu-main">
                                        <div class="megamenu-demo-small p-relative">
                                            <div class="tp-megamenu-small-content">
                                                <div class="row tp-gx-50">
                                                    <div class="col-xl-6">
                                                        <div class="tp-megamenu-list yellow-color">
                                                            <a href="{{ url('architecture') }}">Architecture</a>
                                                            <a href="{{ url('structure') }}">Structure & Civil</a>
                                                            <a href="{{ url('mechanical') }}"> Mechanical & MEP</a>
                                                            <a href="{{ url('management') }}"> Management & Site</a>
                                                            <a href="{{ url('electrical') }}"> Electrical</a>
                                                            <a href="{{ url('bim') }}">Bim Tracks</a>
                                                            <a href="{{ url('graphics') }}">Graphics</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ url('media') }}">Media</a></li>
                                <li><a href="{{ route('careers.index') }}">Careers</a></li>
                                <li><a href="{{ url('contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-2 col-lg-6 col-6">
                    <div class="tp-header-2-contact d-flex align-items-center justify-content-end">
                        <div class="tp-header-search" style="margin-right: 20px; position: relative;">
                            <input type="text" id="course-search" class="form-control" placeholder="Search courses..."
                                   autocomplete="off" style="width: 220px;">
                            <div id="course-search-results" class="list-group"
                                 style="position: absolute; z-index: 1000; width: 100%; display: none;"></div>
                        </div>

                        <!-- Mobile Menu Button (Hamburger) - Visible only on mobile -->
                        <div class="d-xl-none">
                            <button class="mobile-menu-toggle" id="mobile-menu-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                        @auth
                        <div class="tp-header-inner-login tp-header-user-hover">
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
                                            <li>
                                                <a>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <button type="submit">Logout</button>
                                                    </form>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div class="mobile-menu-container d-xl-none" id="mobile-menu-container">
        <nav class="mobile-menu">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="mobile-menu-dropdown">
                    <a href="{{ url('about') }}">About Us</a>
                    <ul class="mobile-submenu">
                        <li><a href="{{ url('about') }}">About CAD Masters</a></li>
                        <li><a href="{{ url('authorization') }}">Accreditation, Authorizations and membership</a></li>
                        <li><a href="{{ url('award') }}">Certificate awards & Thanking</a></li>
                        <li><a href="{{ url('client') }}">Our Clients</a></li>
                    </ul>
                </li>
                <li class="mobile-menu-dropdown">
                    <a href="{{ url('courses') }}">Courses</a>
                    <ul class="mobile-submenu">
                        <li><a href="{{ url('architecture') }}">Architecture</a></li>
                        <li><a href="{{ url('structure') }}">Structure & Civil</a></li>
                        <li><a href="{{ url('mechanical') }}">Mechanical & MEP</a></li>
                        <li><a href="{{ url('management') }}">Management & Site</a></li>
                        <li><a href="{{ url('electrical') }}">Electrical</a></li>
                        <li><a href="{{ url('bim') }}">Bim Tracks</a></li>
                        <li><a href="{{ url('graphics') }}">Graphics</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('media') }}">Media</a></li>
                <li><a href="{{ route('careers.index') }}">Careers</a></li>
                <li><a href="{{ url('contact') }}">Contact Us</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- header-area-end -->

<style>
    /* Mobile Menu Button Styles */
    .mobile-menu-toggle {
        background: none;
        border: none;
        width: 30px;
        height: 24px;
        position: relative;
        cursor: pointer;
        margin-left: 15px;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .mobile-menu-toggle span {
        display: block;
        width: 100%;
        height: 3px;
        background-color: #000;
        transition: all 0.3s ease;
    }

    /* Mobile Menu Container - Hidden by default */
    .mobile-menu-container {
        position: fixed;
        top: 0;
        left: -100%;
        width: 80%;
        max-width: 300px;
        height: 100vh;
        background-color: #fff;
        z-index: 9999;
        overflow-y: auto;
        transition: left 0.3s ease;
        box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        padding-top: 70px;
    }

    .mobile-menu-container.active {
        left: 0;
    }

    /* Mobile Menu Styles */
    .mobile-menu {
        padding: 20px;
    }

    .mobile-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mobile-menu li {
        margin-bottom: 15px;
    }

    .mobile-menu a {
        color: #333;
        text-decoration: none;
        font-size: 16px;
        display: block;
        padding: 8px 0;
    }

    /* Mobile Submenu Styles */
    .mobile-submenu {
        display: none;
        padding-left: 15px;
        margin-top: 5px;
    }

    .mobile-submenu.active {
        display: block;
    }

    /* Overlay when mobile menu is open */
    .mobile-menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        z-index: 9998;
        display: none;
    }

    /* Active state for toggle button */
    .mobile-menu-toggle.active span:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .mobile-menu-toggle.active span:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu-toggle.active span:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -7px);
    }
</style>


@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('course-search');
    const resultsBox = document.getElementById('course-search-results');
    let timeout = null;

    searchInput.addEventListener('input', function() {
        clearTimeout(timeout);
        const query = this.value.trim();
        if (query.length < 2) {
            resultsBox.style.display = 'none';
            resultsBox.innerHTML = '';
            return;
        }
        timeout = setTimeout(() => {
            fetch(`/courses/search?q=${encodeURIComponent(query)}`)
                .then(res => res.json())
                .then(data => {
                    resultsBox.innerHTML = '';
                    if (data.length > 0) {
                        data.forEach(course => {
                            const item = document.createElement('a');
                            item.className =
                                'list-group-item list-group-item-action';
                            item.textContent = course.name;
                            item.href = `/courses/${course.id}`;
                            item.addEventListener('click', function(e) {
                                e.preventDefault();
                                window.location.href = this.href;
                            });
                            resultsBox.appendChild(item);
                        });
                        resultsBox.style.display = 'block';
                    } else {
                        resultsBox.style.display = 'none';
                    }
                });
        }, 300);
    });

    document.addEventListener('click', function(e) {
        if (!searchInput.contains(e.target) && !resultsBox.contains(e.target)) {
            resultsBox.style.display = 'none';
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu-container');
    const body = document.body;

    // Create overlay element
    const overlay = document.createElement('div');
    overlay.className = 'mobile-menu-overlay';
    document.body.appendChild(overlay);

    toggleButton.addEventListener('click', function() {
        this.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        overlay.style.display = overlay.style.display === 'block' ? 'none' : 'block';
        body.style.overflow = body.style.overflow === 'hidden' ? '' : 'hidden';
    });

    overlay.addEventListener('click', function() {
        toggleButton.classList.remove('active');
        mobileMenu.classList.remove('active');
        this.style.display = 'none';
        body.style.overflow = '';
    });

    // Handle dropdown menus
    const dropdownToggles = document.querySelectorAll('.mobile-menu-dropdown > a');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
        e.preventDefault();
        const submenu = this.nextElementSibling;
        submenu.classList.toggle('active');

        // Close other open submenus
        dropdownToggles.forEach(otherToggle => {
            if (otherToggle !== this) {
            otherToggle.nextElementSibling.classList.remove('active');
        }
    });
    });
});
});
</script>
@endpush
