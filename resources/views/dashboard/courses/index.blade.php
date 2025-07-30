@extends('layouts.dashboard')

@section('content')
<main class="tp-dashboard-body-bg">
    <section class="tpd-main pb-75 pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('partials.sidebar') {{-- Sidebar --}}
                </div>
                <div class="col-lg-9">
                    <div class="tpd-content-layout">
                        <section class="tp-fact-wrapper">



                            <h1 align="center" class="jumbotron" align="center">New Courses</h1>

                            @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                            @endif



                            <div class="row row mb-1 mt-25">
                                <!-- Left-aligned search (col-lg-6) -->
                                <div class="col-lg-6">
                                    <div class="tp-course-filter-top-right d-flex justify-content-lg-start">
                                        <div class="tp-course-filter-top-right-search mb-20">
                                            <form action="{{ route('dashboard.courses.index') }}" method="GET">
                                                <input type="text" name="search" placeholder="Search for Courses..." value="{{ request('search') }}">
                                                <button class="tp-course-filter-top-right-search-btn" type="submit">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right-aligned button (col-lg-6 with text-end) -->
                                <div class="col-lg-6 text-end">
                                    <a href="{{ route('dashboard.courses.create') }}" class="btn btn-primary">Add Course</a>
                                </div>
                            </div>

                            @include('partials.table', [
                            'headers' => ['id', 'name', 'image','categories' , 'price', 'price_offer', 'hours'],
                            'items' => $courses,
                            'actions' => [
                            'edit' => 'dashboard.courses.edit',
                            'delete' => 'dashboard.courses.destroy'
                            ]
                            ])
                        </section>
                    </div>

                    @include('partials.pagination', ['items' => $courses])
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


