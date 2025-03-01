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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span><i class="fas fa-book"></i></span>
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('dashboard.courses.index') }}">
                                    <i class="fas fa-list"></i> All Courses
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('dashboard.courses.create') }}">
                                    <i class="fas fa-plus"></i> Add New Course
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
