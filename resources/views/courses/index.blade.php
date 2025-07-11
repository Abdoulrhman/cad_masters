@extends('layouts.dashboard')

@section('content')
<main class="tp-dashboard-body-bg">
    <section class="tpd-main pb-75 pt-75">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="tpd-content-layout">
                        <section class="tp-fact-wrapper">
                            <!-- Course Filter Area -->
                            <div class="tp-course-filter-area p-relative pt-120 pb-120">
                                <div class="tp-breadcrumb__content-filter mb-50">
                                    <div class="tp-breadcrumb__list">
                                        <span><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a></span>
                                        <span class="color">All Courses</span>
                                    </div>
                                    <h3 class="tp-breadcrumb__title">All Courses</h3>
                                    {{--<p>We have the largest collection of <span>{{ $courses->total() }}</span> courses
                                    </p>--}}
                                </div>

                                <div class="tp-course-filter-wrap p-relative">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="tp-course-filter-top-left d-flex align-items-center">
                                                <div class="tp-course-filter-top-tab tp-tab mb-20">
                                                    <ul class="nav nav-tabs" id="filterTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button
                                                                class="nav-link {{ request('view', 'grid') === 'grid' ? 'active' : '' }}"
                                                                id="grid-tab" data-bs-toggle="tab"
                                                                data-bs-target="#grid" type="button" role="tab"
                                                                aria-controls="grid" aria-selected="true">
                                                                <i class="fas fa-grid-2"></i> Grid
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button
                                                                class="nav-link {{ request('view') === 'list' ? 'active' : '' }}"
                                                                id="list-tab" data-bs-toggle="tab"
                                                                data-bs-target="#list" type="button" role="tab"
                                                                aria-controls="list" aria-selected="false">
                                                                <i class="fas fa-list"></i> List
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tp-course-filter-top-result mb-20">
                                                    <p>Showing
                                                        {{ $courses->firstItem() ?? 0 }}-{{ $courses->lastItem() ?? 0 }}
                                                        of {{ $courses->total() }} results</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div
                                                class="tp-course-filter-top-right d-flex align-items-center justify-content-start justify-content-lg-end">
                                                <div class="tp-course-filter-top-right-search d-none d-lg-block mb-20">
                                                    <form action="{{ route('courses.index') }}" method="GET">
                                                        <input type="text" name="search"
                                                            placeholder="Search for Courses..."
                                                            value="{{ request('search') }}">
                                                        <button class="tp-course-filter-top-right-search-btn"
                                                            type="submit">
                                                            <i class="fas fa-search"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="tp-course-filter-btn mb-20">
                                                    <button type="button"
                                                        class="tp-filter-btn filter-show-dropdown-btn filter-open-btn">
                                                        <i class="fas fa-filter"></i> Filter
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Filter Dropdown Area -->
                                    <div id="filters"
                                        class="tp-filter-dropdown-area tp-filter-dropdown-wrapper {{ request()->hasAny(['category', 'price_range', 'sort']) ? 'filter-dropdown-opened' : '' }}">
                                        <form action="{{ route('courses.index') }}" method="GET">
                                            <!-- Preserve search query if exists -->
                                            @if(request('search'))
                                            <input type="hidden" name="search" value="{{ request('search') }}">
                                            @endif

                                            <!-- Preserve view type -->
                                            <input type="hidden" name="view" value="{{ request('view', 'grid') }}">

                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <h4 class="tp-filter-widget-title">Categories</h4>
                                                    <div class="tp-filter-widget-content">
                                                        <div class="tp-filter-widget-checkbox">
                                                            <ul>
                                                                @foreach($categories as $category)
                                                                <li>
                                                                    <div class="form-check">
                                                                        <input type="checkbox" id="cat_{{ $category->id }}" name="category[]"
                                                                            value="{{ $category->id }}"
                                                                            {{ in_array((string)$category->id, (array)request('category')) ? 'checked' : '' }}
                                                                            class="form-check-input">
                                                                        <label for="cat_{{ $category->id }}" class="form-check-label">{{ $category->name }}</label>
                                                                    </div>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h4 class="tp-filter-widget-title">Price Range</h4>
                                                    <div class="tp-filter-widget-content">
                                                        <div class="tp-filter-widget-radio">
                                                            <ul>
                                                                <li>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="price_range"
                                                                            value="all" class="form-check-input"
                                                                            id="price_all"
                                                                            {{ request('price_range', 'all') === 'all' ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="price_all">All</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="price_range"
                                                                            value="free" class="form-check-input"
                                                                            id="price_free"
                                                                            {{ request('price_range') === 'free' ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="price_free">Free</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="price_range"
                                                                            value="paid" class="form-check-input"
                                                                            id="price_paid"
                                                                            {{ request('price_range') === 'paid' ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="price_paid">Paid</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h4 class="tp-filter-widget-title">Sort By</h4>
                                                    <div class="tp-filter-widget-content">
                                                        <div class="tp-filter-widget-radio">
                                                            <ul>
                                                                <li>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="sort" value="latest"
                                                                            class="form-check-input" id="sort_latest"
                                                                            {{ request('sort', 'latest') === 'latest' ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="sort_latest">Latest</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="sort"
                                                                            value="price_low" class="form-check-input"
                                                                            id="sort_price_low"
                                                                            {{ request('sort') === 'price_low' ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="sort_price_low">Price: Low to
                                                                            High</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="sort"
                                                                            value="price_high" class="form-check-input"
                                                                            id="sort_price_high"
                                                                            {{ request('sort') === 'price_high' ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="sort_price_high">Price: High to
                                                                            Low</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn btn-primary">Apply Filters</button>
                                                    <a href="{{ route('courses.index') }}"
                                                        class="btn btn-secondary">Clear Filters</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Course Content Area -->
                            <div class="tab-content" id="myTabContent">
                                <!-- Grid View -->
                                <div class="tab-pane fade {{ request('view', 'grid') === 'grid' ? 'show active' : '' }}"
                                    id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                    <div class="row">
                                        @foreach($courses as $course)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="tp-course-item p-relative fix mb-30">

                                                <div class="tp-course-thumb">
                                                    <a href="{{ route('courses.show', ['course' => $course->id] + request()->query()) }}">
                                                        <img src="{{ $course->image ? asset('storage/' . $course->image) : asset('assets/img/course/default.jpg') }}"
                                                            alt="{{ $course->name }}">
                                                    </a>
                                                </div>
                                                <div class="tp-course-content">
                                                    <div class="tp-course-tag mb-10">
                                                        @foreach($course->categories as $cat)
                                                            <span>{{ $cat->name }}</span>@if(!$loop->last), @endif
                                                        @endforeach
                                                    </div>
                                                    <h4 class="tp-course-title">
                                                        <a
                                                            href="{{ route('courses.show', ['course' => $course->id] + request()->query()) }}">{{ $course->name }}</a>
                                                    </h4>
                                                    <div
                                                        class="tp-course-rating d-flex align-items-end justify-content-between">
                                                        <div class="tp-course-pricing">
                                                            {{--@if($course->price > 0)
                                                            <span>${{ number_format($course->price, 2) }}</span>
                                                            @else
                                                            <span>Free</span>
                                                            @endif--}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tp-course-btn">
                                                    <a href="{{ route('courses.show', ['course' => $course->id] + request()->query()) }}">View Course</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- List View -->
                                <div class="tab-pane fade {{ request('view') === 'list' ? 'show active' : '' }}"
                                    id="list" role="tabpanel" aria-labelledby="list-tab">
                                    @foreach($courses as $course)
                                    <div class="tp-course-filter-item mb-25 d-flex">
                                        <div class="tp-course-filter-thumb">
                                            <a href="{{ route('courses.show', ['course' => $course->id] + request()->query()) }}">
                                                <img src="{{ $course->image ?? 'assets/img/course/default.jpg' }}"
                                                    alt="{{ $course->name }}">
                                            </a>
                                        </div>
                                        <div class="tp-course-filter-content">
                                            <div class="tp-course-filter-tag d-flex align-items-center justify-content-between mb-10">
                                                @foreach($course->categories as $cat)
                                                    <span>{{ $cat->name }}</span>@if(!$loop->last), @endif
                                                @endforeach
                                                <div class="tp-course-rating-star">
                                                    <p>{{ number_format($course->rating, 1) }}<span> /5</span></p>
                                                    <div class="tp-course-rating-icon">
                                                        @for($i = 1; $i <= 5; $i++) <i
                                                            class="fa-solid fa-star {{ $i <= $course->rating ? 'text-warning' : 'text-muted' }}">
                                                            </i>
                                                            @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="tp-course-filter-title">
                                                <a href="{{ route('courses.show', ['course' => $course->id] + request()->query()) }}">{{ $course->name }}</a>
                                            </h4>
                                            <div class="tp-course-filter-meta">
                                                <span><img
                                                        src="{{ $course->instructor_image ?? 'assets/img/teacher/default.png' }}"
                                                        alt="{{ $course->instructor_name }}">{{ $course->instructor_name }}</span>
                                                <span><i class="fas fa-book"></i> {{ $course->hours }} Hours</span>
                                                <span><i class="fas fa-users"></i> {{ $course->students_count ?? 0 }}
                                                    Students</span>
                                            </div>
                                            <div class="tp-course-filter-p">
                                                <p>{{ Str::limit($course->description, 150) }}</p>
                                            </div>
                                            <div
                                                class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
                                                <div class="price">
                                                    @if($course->price > 0)
                                                    <span>${{ number_format($course->price, 2) }}</span>
                                                    @else
                                                    <span>Free</span>
                                                    @endif
                                                </div>
                                                <div class="tp-course-filter-btn">
                                                    <a href="{{ route('courses.show', ['course' => $course->id] + request()->query()) }}">View Course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tp-event-inner-pagination pb-100">
                                        <div class="tp-dashboard-pagination pt-20">
                                            {{ $courses->withQueryString()->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@push('styles')
<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.tp-course-item {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.tp-course-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
}

.tp-course-thumb img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
}

.tp-course-content {
    padding: 20px;
}

.tp-course-tag span {
    background: #f0f4ff;
    color: #5169f1;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 14px;
}

.tp-course-meta {
    display: flex;
    gap: 15px;
    margin: 15px 0;
    color: #666;
    font-size: 14px;
}

.tp-course-title {
    font-size: 18px;
    margin-bottom: 15px;
    line-height: 1.4;
}

.tp-course-title a {
    color: #333;
    text-decoration: none;
}

.tp-course-title a:hover {
    color: #5169f1;
}

.tp-course-btn a {
    display: block;
    text-align: center;
    padding: 12px;
    background: #5169f1;
    color: #fff;
    text-decoration: none;
    border-radius: 0 0 10px 10px;
    transition: all 0.3s ease;
}

.tp-course-btn a:hover {
    background: #3f54d1;
}

.tp-filter-dropdown-area {
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    margin-top: 20px;
}

.tp-filter-widget-title {
    font-size: 18px;
    margin-bottom: 20px;
    color: #333;
}

.tp-filter-widget-content ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.tp-filter-widget-content li {
    margin-bottom: 10px;
}

.form-check-input:checked {
    background-color: #5169f1;
    border-color: #5169f1;
}

.form-check-label {
    color: #666;
    cursor: pointer;
}

.tp-course-filter-item {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
}

.tp-course-filter-thumb {
    width: 250px;
    margin-right: 20px;
}

.tp-course-filter-thumb img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 10px;
}

.tp-course-filter-content {
    flex: 1;
}

.tp-course-filter-title {
    font-size: 20px;
    margin: 15px 0;
}

.tp-course-filter-meta {
    display: flex;
    gap: 20px;
    margin: 15px 0;
    color: #666;
}

.tp-course-filter-p {
    color: #666;
    margin: 15px 0;
}

.tp-course-filter-pricing {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #eee;
}

.price {
    font-size: 20px;
    font-weight: 600;
    color: #5169f1;
}

.tp-course-filter-btn a {
    display: inline-block;
    padding: 10px 25px;
    background: #5169f1;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.tp-course-filter-btn a:hover {
    background: #3f54d1;
}

.tp-filter-dropdown-wrapper {
    visibility: hidden;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.2s;
}
.tp-filter-dropdown-wrapper.filter-dropdown-opened {
    visibility: visible;
    opacity: 1;
    pointer-events: auto;
}
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterForm = document.querySelector('#filters form');
        if (filterForm) {
            filterForm.addEventListener('submit', function() {
                document.getElementById('filters').classList.remove('filter-dropdown-opened');
            });
        }
    });
</script>
@endpush
@endsection
