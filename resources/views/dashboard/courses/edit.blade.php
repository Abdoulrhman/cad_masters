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

                            <form method="POST" action="{{ route('dashboard.courses.update', $course->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="tp-contact-input-form">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="name">Course Name</label>
                                                <input type="text" name="name" id="name"
                                                    value="{{ old('name', $course->name) }}" class="form-control"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="category_id">Category</label>
                                                <select name="category_id" id="category_id" class="form-control">
                                                    <option value="">Select a Category</option>
                                                    @foreach ($courseCategories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ old('category_id', $course->category_id) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="price">Price</label>
                                                <input type="number" name="price" id="price"
                                                    value="{{ old('price', $course->price) }}" class="form-control"
                                                    required min="0" step="0.01">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="price_offer">Offer Price</label>
                                                <input type="number" name="price_offer" id="price_offer"
                                                    value="{{ old('price_offer', $course->price_offer) }}"
                                                    class="form-control" min="0" step="0.01">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="branch_id">Branch</label>
                                                <select name="branch_id" id="branch_id" class="form-control" required>
                                                    <option value="">Select a branch</option>
                                                    @foreach($branches as $branch)
                                                    <option value="{{ $branch->id }}"
                                                        {{ old('branch_id', $course->branch_id) == $branch->id ? 'selected' : '' }}>
                                                        {{ $branch->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="hours">Hours</label>
                                                <input type="number" name="hours" id="hours"
                                                    value="{{ old('hours', $course->hours) }}" class="form-control"
                                                    min="1">
                                            </div>
                                        </div>



                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="max_students">Maximum Students</label>
                                                <input type="number" name="max_students" id="max_students"
                                                    value="{{ old('max_students', $course->max_students) }}"
                                                    class="form-control" required min="1">
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="instructors">Instructors</label>
                                                <select name="instructors[]" id="instructors" class="form-control" multiple required>
                                                    @foreach($instructors as $instructor)
                                                    <option value="{{ $instructor->id }}" {{ (collect(old('instructors', $course->instructors->pluck('id')))->contains($instructor->id)) ? 'selected' : '' }}>
                                                        {{ $instructor->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="certificates">Certificates (Images)</label>
                                                <input type="file" name="certificates[]" id="certificates" class="form-control" accept="image/*" multiple>
                                                <small class="text-muted">You can upload multiple certificate images. Existing certificates will be shown below.</small>
                                                <div class="mt-2">
                                                    @foreach($course->certificates as $certificate)
                                                        <img src="{{ asset('storage/' . $certificate->image) }}" alt="Certificate" style="max-width: 80px; max-height: 80px; margin-right: 8px;">
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="is_active">Status</label>
                                                <select name="is_active" id="is_active" class="form-control" required>
                                                    <option value="1"
                                                        {{ old('is_active', $course->is_active) ? 'selected' : '' }}>
                                                        Active</option>
                                                    <option value="0"
                                                        {{ old('is_active', $course->is_active) ? '' : 'selected' }}>
                                                        Inactive</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="image">Course Image</label>
                                                @if($course->image)
                                                <div class="mb-2">
                                                    <img src="{{ asset('storage/' . $course->image) }}"
                                                        alt="{{ $course->name }}" class="img-thumbnail"
                                                        style="max-height: 100px;">
                                                </div>
                                                @endif
                                                <input type="file" name="image" id="image" class="form-control"
                                                    accept="image/*">
                                                <small class="text-muted">Leave empty to keep the current image. Max
                                                    size: 2MB</small>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="tp-contact-input p-relative">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="editor" class="form-control"
                                                    rows="4"
                                                    required>{{ old('description', $course->description) }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="outline_link">Outline Link</label>
                                                <input type="url" name="outline_link" id="outline_link"
                                                    value="{{ old('outline_link', $course->outline_link) }}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label for="youtube_link">YouTube Link</label>
                                                <input type="url" name="youtube_link" id="youtube_link"
                                                    value="{{ old('youtube_link', $course->youtube_link) }}"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label class="form-label">Course Sessions (Start/End Dates)</label>
                                            <div id="sessions-wrapper">
                                                @foreach($course->sessions as $i => $session)
                                                <div class="row mb-2 session-row">
                                                    <div class="col-md-5">
                                                        <input type="datetime-local"
                                                            name="sessions[{{ $i }}][start_date]" class="form-control"
                                                            value="{{ old('sessions.'.$i.'.start_date', $session->start_date ? $session->start_date->format('Y-m-d\TH:i') : '') }}"
                                                            placeholder="Start Date">
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="datetime-local" name="sessions[{{ $i }}][end_date]"
                                                            class="form-control"
                                                            value="{{ old('sessions.'.$i.'.end_date', $session->end_date ? $session->end_date->format('Y-m-d\TH:i') : '') }}"
                                                            placeholder="End Date">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="button" class="btn btn-danger remove-session"
                                                            {{ $i == 0 ? 'style=display:none;' : '' }}>Remove</button>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <button type="button" class="btn btn-secondary" id="add-session">Add
                                                Session</button>
                                        </div>

                                        <div class="tp-contact-btn mt-3">
                                            <button type="submit" class="btn btn-primary">Update Course</button>
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
        toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', 'undo', 'redo'],
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
            const nameInput = document.querySelector('input[name="name"]');
            if (nameInput && nameInput.style.display === 'none') {
                // Make sure the input is visible just before submission
                nameInput.style.display = 'block';
                nameInput.style.position = 'absolute';
                nameInput.style.opacity = '0';
            }
        });
    })
    .catch(error => {
        console.error(error);
    });

// Session management code
let sessionIndex = {{ $course->sessions->count() }};
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

// Enhance instructors select with Select2
$(document).ready(function() {
    $('#instructors').select2({
        placeholder: 'Select instructors',
        width: '100%'
    });
});
</script>
@endpush
