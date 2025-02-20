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
                        <div class="container">
                            <h2 class="mb-4 text-center">Create New Course</h2>

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="{{ route('dashboard.courses.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Course Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required
                                            value="{{ old('name') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select name="category_id" id="category_id" class="form-control" required
                                            style="display: block !important;">
                                            <option value="">Select a category</option>
                                            @foreach ($courseCategories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" name="price" class="form-control" id="price" required
                                            step="0.01" value="{{ old('price') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="price_offer" class="form-label">Discounted Price (if any)</label>
                                        <input type="number" name="price_offer" class="form-control" id="price_offer"
                                            step="0.01" value="{{ old('price_offer') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="schedule_time" class="form-label">Schedule Time</label>
                                        <input type="time" name="schedule_time" class="form-control" id="schedule_time"
                                            value="{{ old('schedule_time') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="hours" class="form-label">Total Hours</label>
                                        <input type="number" name="hours" class="form-control" id="hours" min="1"
                                            step="1" value="{{ old('hours') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="branch" class="form-label">Branch</label>
                                        <input type="text" name="branch" class="form-control" id="branch"
                                            value="{{ old('branch') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" name="start_date" class="form-control" id="start_date"
                                            required value="{{ old('start_date') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" name="end_date" class="form-control" id="end_date" required
                                            value="{{ old('end_date') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="image" class="form-label">Course Image (Optional)</label>
                                        <input type="file" name="image" class="form-control" id="image"
                                            accept="image/jpg,image/jpeg,image/png">
                                    </div>

                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary">Create Course</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection
