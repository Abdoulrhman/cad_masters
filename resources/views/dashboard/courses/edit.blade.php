@extends('layouts.dashboard')

@section('content')
<main class="tp-dashboard-body-bg">
    <section class="tpd-main pb-75 pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('partials.sidebar')
                </div>
                <div class="col-lg-9">
                    <div class="tpd-content-layout">
                        <section class="tp-fact-wrapper">
                            <h3 class="tp-contact-from-title">Edit Course 👍🏻</h3>

                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    <li>The course name field is required.</li>
                                    <li>The hours field is required.</li>
                                    <li>The end date field must be a date after start date.</li>
                                </ul>
                            </div>
                            @endif

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('dashboard.courses.update', $course->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="tp-contact-input-form">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="name">Course Name</label>
                                                <input type="text" name="name" id="name" value="{{ old('name', $course->name) }}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="category_id">Category</label>
                                                <select name="category_id" id="category_id" class="form-control">
                                                    <option value="">Select a Category</option>
                                                    @foreach ($courseCategories as $category)
                                                    <option value="{{ $category->id }}" {{ old('category_id', $course->category_id) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="price">Price</label>
                                                <input type="number" name="price" id="price" value="{{ old('price', $course->price) }}" class="form-control" required min="0" step="0.01">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="price_offer">Offer Price</label>
                                                <input type="number" name="price_offer" id="price_offer" value="{{ old('price_offer', $course->price_offer) }}" class="form-control" min="0" step="0.01">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="branch">Branch</label>
                                                <input type="text" name="branch" id="branch" value="{{ old('branch', $course->branch) }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="hours">Hours</label>
                                                <input type="number" name="hours" id="hours" value="{{ old('hours', $course->hours) }}" class="form-control" min="1">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="start_date">Start Date</label>
                                                <input type="datetime-local" name="start_date" id="start_date" value="{{ old('start_date', date('Y-m-d\TH:i', strtotime($course->start_date))) }}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="end_date">End Date</label>
                                                <input type="datetime-local" name="end_date" id="end_date" value="{{ old('end_date', date('Y-m-d\TH:i', strtotime($course->end_date))) }}" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="max_students">Maximum Students</label>
                                                <input type="number" name="max_students" id="max_students" value="{{ old('max_students', $course->max_students) }}" class="form-control" required min="1">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="instructor_id">Instructor</label>
                                                <select name="instructor_id" id="instructor_id" class="form-control">
                                                    <option value="">Select an Instructor</option>
                                                    @foreach (\App\Models\User::where('role', 'instructor')->get() as $instructor)
                                                    <option value="{{ $instructor->id }}" {{ old('instructor_id', $course->instructor_id) == $instructor->id ? 'selected' : '' }}>
                                                        {{ $instructor->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="is_active">Status</label>
                                                <select name="is_active" id="is_active" class="form-control" required>
                                                    <option value="1" {{ old('is_active', $course->is_active) ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ old('is_active', $course->is_active) ? '' : 'selected' }}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="image">Course Image</label>
                                                @if($course->image)
                                                <div class="mb-2">
                                                    <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->name }}" class="img-thumbnail" style="max-height: 100px;">
                                                </div>
                                                @endif
                                                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                                <small class="text-muted">Leave empty to keep the current image. Max size: 2MB</small>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="tp-contact-input p-relative">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $course->description) }}</textarea>
                                            </div>
                                        </div>

                                        <div class="tp-contact-btn text-center mt-3">
                                            <button type="submit" class="btn btn-primary">Update Course</button>
                                            <a href="{{ route('dashboard.courses.index') }}" class="btn btn-secondary">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
