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

                                    {{--<div class="col-md-6 mb-3">
                                        <label class="form-label">Categories</label>
                                        <div class="d-flex flex-wrap gap-3">
                                            @foreach ($courseCategories as $category)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                           name="category_ids[]"
                                                           id="category_{{ $category->id }}"
                                                           value="{{ $category->id }}"
                                                            {{ in_array($category->id, old('category_ids', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="category_{{ $category->id }}">
                                                        {{ $category->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>--}}

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
                                        <label for="branch_id" class="form-label">Branch</label>
                                        <select name="branch_id" id="branch_id" class="form-control" required>
                                            <option value="">Select a branch</option>
                                            @foreach ($branches as $branch)
                                            <option value="{{ $branch->id }}"
                                                {{ old('branch_id') == $branch->id ? 'selected' : '' }}>
                                                {{ $branch->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="hours" class="form-label">Hours</label>
                                        <input type="number" name="hours" class="form-control" id="hours" min="1"
                                            value="{{ old('hours') }}">
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
                                            @foreach ($instructors as $instructor)
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
                                            <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>
                                                Active</option>
                                            <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="image" class="form-label">Course Image</label>
                                        <input type="file" name="image" class="form-control" id="image"
                                            accept="image/*">
                                        <small class="text-muted">Recommended size: 800x600px. Max size: 2MB</small>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="description" id="description" class="form-control" rows="4"
                                            required>{{ old('description') }}</textarea>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="outline_link" class="form-label">Outline Link</label>
                                        <input type="url" name="outline_link" class="form-control" id="outline_link"
                                            value="{{ old('outline_link') }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="youtube_link" class="form-label">YouTube Link</label>
                                        <input type="url" name="youtube_link" class="form-control" id="youtube_link"
                                            value="{{ old('youtube_link') }}">
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">Course Sessions (Start/End Dates)</label>
                                        <div id="sessions-wrapper">
                                            <div class="row mb-2 session-row">
                                                <div class="col-md-5">
                                                    <input type="datetime-local" name="sessions[0][start_date]"
                                                        class="form-control" placeholder="Start Date">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="datetime-local" name="sessions[0][end_date]"
                                                        class="form-control" placeholder="End Date">
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-danger remove-session"
                                                        style="display:none;">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-secondary" id="add-session">Add
                                            Session</button>
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

@push('scripts')
<script>
let sessionIndex = 1;
document.getElementById('add-session').addEventListener('click', function() {
    const wrapper = document.getElementById('sessions-wrapper');
    const row = document.createElement('div');
    row.className = 'row mb-2 session-row';
    row.innerHTML = `
        <div class="col-md-5">
            <input type="datetime-local" name="sessions[${sessionIndex}][start_date]" class="form-control" placeholder="Start Date">
        </div>
        <div class="col-md-5">
            <input type="datetime-local" name="sessions[${sessionIndex}][end_date]" class="form-control" placeholder="End Date">
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-danger remove-session">Remove</button>
        </div>
    `;
    wrapper.appendChild(row);
    sessionIndex++;
});
document.getElementById('sessions-wrapper').addEventListener('click', function(e) {
    if (e.target.classList.contains('remove-session')) {
        e.target.closest('.session-row').remove();
    }
});
</script>
@endpush
