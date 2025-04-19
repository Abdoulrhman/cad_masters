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
                                        <select name="category_id" id="category_id" class="form-control" required>
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
                                            min="0" step="0.01" value="{{ old('price') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="price_offer" class="form-label">Offer Price</label>
                                        <input type="number" name="price_offer" class="form-control" id="price_offer"
                                            min="0" step="0.01" value="{{ old('price_offer') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="branch" class="form-label">Branch</label>
                                        <input type="text" name="branch" class="form-control" id="branch"
                                            value="{{ old('branch') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="hours" class="form-label">Hours</label>
                                        <input type="number" name="hours" class="form-control" id="hours"
                                            min="1" value="{{ old('hours') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="datetime-local" name="start_date" class="form-control" id="start_date"
                                            required value="{{ old('start_date') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="datetime-local" name="end_date" class="form-control" id="end_date" required
                                            value="{{ old('end_date') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="max_students" class="form-label">Maximum Students</label>
                                        <input type="number" name="max_students" class="form-control" id="max_students"
                                            required min="1" value="{{ old('max_students') }}">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="instructor_id" class="form-label">Instructor</label>
                                        <select name="instructor_id" id="instructor_id" class="form-control" required>
                                            <option value="">Select an instructor</option>
                                            @foreach (\App\Models\User::where('role', 'instructor')->get() as $instructor)
                                            <option value="{{ $instructor->id }}"
                                                {{ old('instructor_id') == $instructor->id ? 'selected' : '' }}>
                                                {{ $instructor->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="is_active" class="form-label">Status</label>
                                        <select name="is_active" id="is_active" class="form-control" required>
                                            <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="image" class="form-label">Course Image</label>
                                        <input type="file" name="image" class="form-control" id="image" accept="image/*">
                                        <small class="text-muted">Recommended size: 800x600px. Max size: 2MB</small>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="description" id="description" class="form-control" rows="4"
                                            required>{{ old('description') }}</textarea>
                                    </div>

                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary">Create Course</button>
                                        <a href="{{ route('dashboard.courses.index') }}" class="btn btn-secondary">Cancel</a>
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
