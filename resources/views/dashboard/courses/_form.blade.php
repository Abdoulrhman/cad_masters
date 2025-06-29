@php
    $isEdit = $formMode === 'edit';
@endphp


<form action="{{ $isEdit ? route('dashboard.courses.update', $course->id) : route('dashboard.courses.store') }}"
      method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    @if ($isEdit)
        @method('PUT')
    @endif

    <div class="row">
        {{-- Course Name --}}
        <div class="col-md-6 mb-3">
            <label for="name" class="form-label">Course Name</label>
            <select name="name" id="name" class="form-select @error('name') is-invalid @enderror" required>
                @foreach(config('courses.courses') as $value => $label)
                    <option value="{{ $value }}" {{ old('name', $isEdit ? $course->name : '') == $value ? 'selected' : '' }}>
                        {{ $label }}
                    </option>
                @endforeach
            </select>


            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Categories --}}
        <div class="col-md-6 mb-3">
            <div class="tpd-new-course-select2">
                <div class="tpd-input">
                    <label for="categories" class="form-label">Categories</label>
                    <select name="categories[]" id="categories" class="form-control select2-hidden-accessible" multiple required size="8" style=" max-height: 200px; height: auto; overflow-y: scroll;">
                        @foreach ($courseCategories as $category)
                            <option value="{{ $category->id }}"
                                {{ in_array($category->id, old('categories', $isEdit ? $course->categories->pluck('id')->toArray() : [])) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        {{-- Price --}}
        <div class="col-md-6 mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" required min="0" step="0.01"
                value="{{ old('price', $isEdit ? $course->price : '') }}">
        </div>

        {{-- Offer Price --}}
        <div class="col-md-6 mb-3">
            <label for="price_offer" class="form-label">Offer Price</label>
            <input type="number" name="price_offer" id="price_offer" class="form-control" min="0" step="0.01"
                value="{{ old('price_offer', $isEdit ? $course->price_offer : '') }}">
        </div>

        {{-- Hours --}}
        <div class="col-md-6 mb-3">
            <label for="hours" class="form-label">Hours</label>
            <input type="number" name="hours" id="hours" class="form-control" min="1" required
                value="{{ old('hours', $isEdit ? $course->hours : '') }}">
        </div>

        {{-- Days in Week --}}
        <div class="col-md-6 mb-3">
            <label for="daysInWeek" class="form-label">Days In Week</label>
            <input type="text" name="daysInWeek" id="daysInWeek" class="form-control"
                value="{{ old('daysInWeek', $isEdit ? $course->daysInWeek : '') }}">
        </div>

        {{-- Maximum Students --}}
        <div class="col-md-6 mb-3">
            <label for="max_students" class="form-label">Maximum Students</label>
            <input type="number" name="max_students" id="max_students" class="form-control" required min="1"
                value="{{ old('max_students', $isEdit ? $course->max_students : '') }}">
        </div>

        {{-- Instructors --}}
        <div class="col-md-6 mb-3">
            <div class="tpd-new-course-select2">
                <div class="tpd-input">
                    <label for="instructors" class="form-label">Instructors</label>
                    <select name="instructors[]" id="instructors" class="form-control select2-hidden-accessible" multiple required>
                        @foreach ($instructors as $instructor)
                            <option value="{{ $instructor->id }}"
                                {{ in_array($instructor->id, old('instructors', $isEdit ? $course->instructors->pluck('id')->toArray() : [])) ? 'selected' : '' }}>
                                {{ $instructor->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        {{-- Certificates --}}
        <div class="col-md-6 mb-3">
            <label for="certificates" class="form-label">Certificates (Images)</label>
            <input type="file" name="certificates[]" id="certificates" class="form-control" accept="image/*" multiple>
            <small class="text-muted">You can upload multiple certificate images.</small>
        </div>

        {{-- Status --}}
        <div class="col-md-6 mb-3">
            <label for="is_active" class="form-label">Status</label>
            <select name="is_active" id="is_active" class="form-control" required>
                <option value="1" {{ old('is_active', $isEdit ? $course->is_active : '1') == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('is_active', $isEdit ? $course->is_active : '1') == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        {{-- Course Image --}}
        <div class="col-md-6 mb-3">
            <label for="image" class="form-label">Course Image</label>
            <input type="file" name="image" class="form-control" id="image" accept="image/*">
            <small class="text-muted">Recommended size: 800x600px. Max size: 2MB</small>
        </div>

        {{-- Description --}}
        <div class="col-12 mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="editor" class="form-control" rows="4" required>{{ old('description', $isEdit ? $course->description : '') }}</textarea>
        </div>

        {{-- Outline Link --}}
        <div class="col-md-6 mb-3">
            <label for="outline_link" class="form-label">Outline Link</label>
            <input type="url" name="outline_link" class="form-control" id="outline_link"
                value="{{ old('outline_link', $isEdit ? $course->outline_link : '') }}">
        </div>

        {{-- YouTube Link --}}
        <div class="col-md-6 mb-3">
            <label for="youtube_link" class="form-label">YouTube Link</label>
            <input type="url" name="youtube_link" class="form-control" id="youtube_link"
                value="{{ old('youtube_link', $isEdit ? $course->youtube_link : '') }}">
        </div>

        {{-- Course Sessions --}}
        <div class="col-12 mb-3">
            <label class="form-label">Course Sessions</label>
            <div id="sessions-wrapper">
                @if ($isEdit && $course->sessions->count())
                    @foreach ($course->sessions as $index => $session)
                        <div class="row mb-2 session-row">
                            <div class="col-md-4">
                                <input type="datetime-local" name="sessions[{{ $index }}][start_date]"
                                    class="form-control"
                                    value="{{ \Carbon\Carbon::parse($session->start_date)->format('Y-m-d\TH:i') }}">
                            </div>
                            <div class="col-md-4">
                                <input type="datetime-local" name="sessions[{{ $index }}][end_date]"
                                    class="form-control"
                                    value="{{ \Carbon\Carbon::parse($session->end_date)->format('Y-m-d\TH:i') }}">
                            </div>
                            <div class="col-md-3">
                                <select name="sessions[{{ $index }}][branch_id]" class="form-control" required>
                                    <option value="">Select a branch</option>
                                    @foreach ($branches as $branch)
                                        <option value="{{ $branch->id }}" {{ ($session->branch_id == $branch->id || (isset($session->branch) && $session->branch->id == $branch->id)) ? 'selected' : '' }}>
                                            {{ $branch->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="sessions[{{ $index }}][id]" value="{{ $session->id }}">
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-danger remove-session">Remove</button>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row mb-2 session-row">
                        <div class="col-md-4">
                            <input type="datetime-local" name="sessions[0][start_date]" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="datetime-local" name="sessions[0][end_date]" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <select name="sessions[0][branch_id]" class="form-control" required>
                                <option value="">Select a branch</option>
                                @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-danger remove-session" style="display: none;">Remove</button>
                        </div>
                    </div>
                @endif
            </div>
            <button type="button" class="btn btn-secondary" id="add-session">Add Session</button>
        </div>

        {{-- Submit --}}
        <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-primary">
                {{ $isEdit ? 'Update Course' : 'Create Course' }}
            </button>
        </div>
    </div>
</form>





