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
                                                            <a href="{{ url('certificate') }}">Certificate awards &
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
                                <li><a href="{{ url('courses') }}">Courses</a></li>
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
<!-- header-area-end -->

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
</script>
@endpush
