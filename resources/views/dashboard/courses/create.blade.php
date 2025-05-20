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
                                enctype="multipart/form-data" novalidate>
                                @csrf

                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Course Name</label>
                                        <select name="name" id="name"
                                            class="form-select @error('name') is-invalid @enderror" required>
                                            @foreach(config('courses.courses') as $value => $label)
                                            <option value="{{ $value }}" {{ old('name') == $value ? 'selected' : '' }}>
                                                {{ $label }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    {{--<div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Course Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required
                                            value="{{ old('name') }}">
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
                                    <input type="number" name="price" class="form-control" id="price" required min="0"
                                        step="0.01" value="{{ old('price') }}">
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
                                    <label for="daysInWeek" class="form-label">Days In Week</label>
                                    <input type="text" name="daysInWeek" class="form-control" id="daysInWeek"
                                        value="{{ old('daysInWeek') }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="max_students" class="form-label">Maximum Students</label>
                                    <input type="number" name="max_students" class="form-control" id="max_students"
                                        required min="1" value="{{ old('max_students') }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="instructors" class="form-label">Instructors</label>
                                    <select name="instructors[]" id="instructors" class="form-control" multiple
                                        required>
                                        @foreach ($instructors as $instructor)
                                        <option value="{{ $instructor->id }}"
                                            {{ collect(old('instructors'))->contains($instructor->id) ? 'selected' : '' }}>
                                            {{ $instructor->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="certificates" class="form-label">Certificates (Images)</label>
                                    <input type="file" name="certificates[]" id="certificates" class="form-control"
                                        accept="image/*" multiple>
                                    <small class="text-muted">You can upload multiple certificate images.</small>
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
                                    <input type="file" name="image" class="form-control" id="image" accept="image/*">
                                    <small class="text-muted">Recommended size: 800x600px. Max size: 2MB</small>
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="editor" class="form-control" rows="4"
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
<!-- CKEditor CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<!-- Select2 CDN -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
// CKEditor 5 implementation
let editor;
ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
            'insertTable', 'undo', 'redo'
        ],
    })
    .then(newEditor => {
        editor = newEditor;

        // Fix for form validation errors on hidden/replaced form controls
        const form = document.querySelector('form');
        form.addEventListener('submit', (e) => {
            // Fix for description field (CKEditor)
            const descriptionInput = document.querySelector('textarea[name="description"]');
            descriptionInput.value = editor.getData();

            // Fix for name field if it's hidden
            const nameSelect = document.querySelector('select[name="name"]');
            if (nameSelect && nameSelect.style.display === 'none') {
                nameSelect.removeAttribute('style'); // safer way
                nameSelect.style.position = 'absolute';
                nameSelect.style.opacity = '0';
                nameSelect.style.pointerEvents = 'none';
                nameSelect.style.height = '1px';
                nameSelect.style.width = '1px';
            }

        });
    })
    .catch(error => {
        console.error(error);
    });

// Enhance instructors select with Select2
$(document).ready(function() {
    $('#instructors').select2({
        placeholder: 'Select instructors',
        width: '100%'
    });
});

// Session rows handling
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