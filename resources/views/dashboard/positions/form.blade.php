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
                            <h1 align="center" class="jumbotron">{{ isset($position) ? 'Edit Position' : 'Create Position' }}</h1>

                            {{-- Error messages --}}
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form action="{{ isset($position) ? route('dashboard.positions.update', $position) : route('dashboard.positions.store') }}"
                                  method="POST"
                                  id="positionForm">
                                @csrf
                                @if(isset($position))
                                    @method('PUT')
                                @endif

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title *</label>
                                            <input type="text"
                                                   class="form-control @error('title') is-invalid @enderror"
                                                   id="title"
                                                   name="title"
                                                   value="{{ old('title', $position->title ?? '') }}"
                                                   required>
                                            @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="department" class="form-label">Department *</label>
                                            <input type="text"
                                                   class="form-control @error('department') is-invalid @enderror"
                                                   id="department"
                                                   name="department"
                                                   value="{{ old('department', $position->department ?? '') }}"
                                                   required>
                                            @error('department')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="type" class="form-label">Type *</label>
                                            <select class="form-control @error('type') is-invalid @enderror"
                                                    id="type"
                                                    name="type"
                                                    required>
                                                <option value="">Select Type</option>
                                                @php
                                                    $types = ['Full-time', 'Part-time', 'Contract', 'Internship'];
                                                    $currentType = old('type', $position->type ?? '');
                                                @endphp
                                                @foreach($types as $type)
                                                    <option value="{{ $type }}" {{ $currentType == $type ? 'selected' : '' }}>
                                                        {{ $type }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="is_active" class="form-label">Status</label>
                                            <div class="form-check form-switch">
                                                <input type="hidden" name="is_active" value="0">
                                                <input type="checkbox"
                                                       class="form-check-input"
                                                       id="is_active"
                                                       name="is_active"
                                                       value="1"
                                                       {{ old('is_active', $position->is_active ?? true) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_active">Active</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description *</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror"
                                                      id="description"
                                                      name="description"
                                                      rows="4"
                                                      required>{{ old('description', $position->description ?? '') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Requirements *</label>
                                            <div id="requirements-wrapper">
                                                @php
                                                    $requirements = old('requirements', $position->requirements ?? []);
                                                    $requirements = is_array($requirements) ? $requirements : json_decode($requirements, true) ?? [];
                                                    if (empty($requirements)) {
                                                        $requirements = [''];
                                                    }
                                                @endphp
                                                @foreach($requirements as $requirement)
                                                <div class="input-group mb-2">
                                                    <input type="text"
                                                           class="form-control"
                                                           name="requirements[]"
                                                           value="{{ $requirement }}"
                                                           required>
                                                    <button type="button" class="btn btn-danger remove-requirement">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                                @endforeach
                                            </div>
                                            <button type="button" class="btn btn-secondary mt-2" id="add-requirement">
                                                <i class="fas fa-plus"></i> Add Requirement
                                            </button>
                                            @error('requirements')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                            @error('requirements.*')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('dashboard.positions.index') }}" class="tp-btn tp-btn-grey">Cancel</a>
                                            <button type="submit" class="tp-btn">{{ isset($position) ? 'Update' : 'Create' }} Position</button>
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.getElementById('requirements-wrapper');
    const addButton = document.getElementById('add-requirement');

    // Add new requirement
    addButton.addEventListener('click', function() {
        const div = document.createElement('div');
        div.className = 'input-group mb-2';
        div.innerHTML = `
            <input type="text" class="form-control" name="requirements[]" required>
            <button type="button" class="btn btn-danger remove-requirement">
                <i class="fas fa-times"></i>
            </button>
        `;
        wrapper.appendChild(div);
    });

    // Remove requirement
    document.addEventListener('click', function(e) {
        const button = e.target.closest('.remove-requirement');
        if (button) {
            const row = button.closest('.input-group');
            if (wrapper.children.length > 1) {
                row.remove();
            }
        }
    });
});
</script>
@endpush
