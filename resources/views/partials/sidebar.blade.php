<div {{--class="tpd-user-sidebar"--}}>
    <div class="tp-user-wrap">
        <div class="tp-user-menu">
            <nav>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">WELCOME</li>

                    <li class="sidebar-item">
                        <a href="{{ url('/dashboard') }}" class="sidebar-link">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="#coursesSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-book"></i>
                            <span>Courses</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="coursesSubmenu">
                            <li><a href="{{ route('dashboard.courses.index') }}">All Courses</a></li>
                            <li><a href="{{ route('dashboard.courses.create') }}">Add New Course</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#categorySubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-folder"></i>
                            <span>Category</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="categorySubmenu">
                            <li><a href="{{ route('dashboard.categories.index') }}">All Categories</a></li>
                            <li><a href="{{ route('dashboard.categories.create') }}">Add New Category</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#employeesSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-user-tie"></i>
                            <span>Employees</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="employeesSubmenu">
                            <li><a href="{{ route('dashboard.employees.index') }}">All Employees</a></li>
                            <li><a href="{{ route('dashboard.employees.create') }}">Add New Employee</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#clientsSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-users"></i>
                            <span>Clients</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="clientsSubmenu">
                            <li><a href="{{ route('dashboard.clients.index') }}">All Clients</a></li>
                            <li><a href="{{ route('dashboard.clients.create') }}">Add New Client</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#usersSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fa-solid fa-user"></i>
                            <span>Users</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="usersSubmenu">
                            <li><a href="{{ route('dashboard.users.index') }}">All Users</a></li>
                            <li><a href="{{ route('dashboard.users.create') }}">Add New User</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#awardsSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fa-solid fa-award"></i>
                            <span>Awards</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="awardsSubmenu">
                            <li><a href="{{ route('dashboard.awards.index') }}">All Awards</a></li>
                            <li><a href="{{ route('dashboard.awards.create') }}">Add New Awards</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#partnersSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-handshake"></i>
                            <span>Partners</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="partnersSubmenu">
                            <li><a href="{{ route('dashboard.partners.index') }}">All Partners</a></li>
                            <li><a href="{{ route('dashboard.partners.create') }}">Add New Partner</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#instructorsSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span>Instructors</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="instructorsSubmenu">
                            <li><a href="{{ route('dashboard.instructors.index') }}">All Instructors</a></li>
                            <li><a href="{{ route('dashboard.instructors.create') }}">Add New Instructor</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#branchesSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-code-branch"></i>
                            <span>Branches</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="branchesSubmenu">
                            <li><a href="{{ route('dashboard.branches.index') }}">All Branches</a></li>
                            <li><a href="{{ route('dashboard.branches.create') }}">Add New Branches</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#carouselSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-images"></i>
                            <span>Carousel</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="carouselSubmenu">
                            <li><a href="{{ route('dashboard.carousel.index') }}">All Sliders</a></li>
                            <li><a href="{{ route('dashboard.carousel.create') }}">Add New Slider</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#certificatesSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-certificate"></i>
                            <span>Certificates</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="certificatesSubmenu">
                            <li><a href="{{ route('dashboard.certificates.index') }}">All Certificates</a></li>
                            <li><a href="{{ route('dashboard.certificates.create') }}">Add New Certificate</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#studentsSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-user-graduate"></i>
                            <span>Students</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="studentsSubmenu">
                            <li><a href="{{ route('dashboard.students.index') }}">All Students</a></li>
                            <li><a href="{{ route('dashboard.students.create') }}">Add New Student</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#authorizationsSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-shield-alt"></i>
                            <span>Authorizations</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="authorizationsSubmenu">
                            <li><a href="{{ route('dashboard.authorizations.index') }}">All Authorizations</a></li>
                            <li><a href="{{ route('dashboard.authorizations.create') }}">Add New Authorization</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="#mediaSubmenu" data-bs-toggle="collapse" class="sidebar-link">
                            <i class="fas fa-photo-video"></i>
                            <span>Media</span>
                            <i class="fas fa-chevron-down ms-auto"></i>
                        </a>
                        <ul class="collapse sidebar-dropdown" id="mediaSubmenu">
                            <li><a href="{{ route('dashboard.media.albums.index') }}">Media Albums</a></li>
                            <li><a href="{{ route('dashboard.media.albums.create') }}">Create Album</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{ route('dashboard.company-profile.index') }}" class="sidebar-link">
                            <i class="fas fa-building"></i>
                            <span>Company Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{ route('dashboard.job-applications.index') }}" class="sidebar-link">
                            <i class="fas fa-briefcase"></i>
                            <span>Job Applications</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="{{ route('dashboard.positions.index') }}" class="sidebar-link">
                            <i class="fas fa-list"></i>
                            <span>Job Positions</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<style>
.tpd-user-sidebar {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px 0;
}

.sidebar-nav {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar-header {
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    color: #72849a;
    padding: 10px 20px;
    margin-bottom: 10px;
}

.sidebar-item {
    margin: 2px 0;
}

.sidebar-link {
    display: flex;
    align-items: center;
    padding: 12px 20px;
    color: #506690;
    text-decoration: none;
    transition: all 0.3s;
    border-radius: 5px;
    margin: 0 10px;
}

.sidebar-link:hover,
.sidebar-link[aria-expanded="true"] {
    background: #f8f9fa;
    color: #4661fd;
}

.sidebar-link i:first-child {
    width: 20px;
    margin-right: 10px;
    font-size: 16px;
}

.sidebar-link span {
    flex: 1;
    font-size: 14px;
}

.sidebar-dropdown {
    list-style: none;
    padding: 5px 0 5px 0px;
    margin: 0;
    background: #f8f9fa;
    margin: 0 10px;
    border-radius: 0 0 5px 5px;
}

.sidebar-dropdown a {
    display: block;
    padding: 8px 0;
    color: #506690;
    font-size: 13px;
    text-decoration: none;
    transition: color 0.3s;
}

.sidebar-dropdown a:hover {
    color: #4661fd;
}

.fa-chevron-down {
    font-size: 12px;
    transition: transform 0.3s;
}

[aria-expanded="true"] .fa-chevron-down {
    transform: rotate(180deg);
}
</style>
