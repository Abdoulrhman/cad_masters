<div class="tpd-user-sidebar">
    <div class="tp-user-wrap">
        <div class="tp-user-menu">
            <nav>
                <ul>
                    <li class="tp-user-menu-title">Welcome</li>

                    <li>
                        <a href="{{ url('/dashboard') }}">
                            <span><i class="fas fa-tachometer-alt"></i></span>
                            Dashboard
                        </a>
                    </li>

                    @php
                    $modules = [
                    ['name' => 'Courses', 'icon' => 'fa-book', 'route' => 'dashboard.courses'],
                    ['name' => 'Category', 'icon' => 'fa-book', 'route' => 'dashboard.categories'],
                    ['name' => 'Employees', 'icon' => 'fa-user-tie', 'route' => 'dashboard.employees'],
                    ['name' => 'Clients', 'icon' => 'fa-users', 'route' => 'dashboard.clients'],
                    ['name' => 'Partners', 'icon' => 'fa-handshake', 'route' => 'dashboard.partners'],
                    ['name' => 'Instructors', 'icon' => 'fa-chalkboard-teacher', 'route' => 'dashboard.instructors'],
                    ];
                    @endphp

                    @foreach ($modules as $module)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="{{ strtolower($module['name']) }}Dropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span><i class="fas {{ $module['icon'] }}"></i></span>
                            {{ $module['name'] }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="{{ strtolower($module['name']) }}Dropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route($module['route'] . '.index') }}">
                                    <i class="fas fa-list"></i> All {{ $module['name'] }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route($module['route'] . '.create') }}">
                                    <i class="fas fa-plus"></i> Add New {{ $module['name'] }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endforeach

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="carouselDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span><i class="fas fa-images"></i></span>
                            Carousel
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="carouselDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('dashboard.carousel.index') }}">
                                    <i class="fas fa-list"></i> All Sliders
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#addCarouselModal">
                                    <i class="fas fa-plus"></i> Add New Slider
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="studentsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span><i class="fas fa-user-graduate"></i></span>
                            Students
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="studentsDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('dashboard.students.index') }}">
                                    <i class="fas fa-list"></i> All Students
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('dashboard.students.create') }}">
                                    <i class="fas fa-user-plus"></i> Add New Student
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ url('/dashboard/profile') }}">
                            <span><i class="fas fa-user"></i></span>
                            My Profile
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/dashboard/enrolled-courses') }}">
                            <span><i class="fas fa-graduation-cap"></i></span>
                            Enrolled Courses
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/dashboard/wishlist') }}">
                            <span><i class="fas fa-heart"></i></span>
                            Wishlist
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/dashboard/orders') }}">
                            <span><i class="fas fa-shopping-cart"></i></span>
                            Order History
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}">
                            <span><i class="fas fa-sign-out-alt"></i></span>
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
