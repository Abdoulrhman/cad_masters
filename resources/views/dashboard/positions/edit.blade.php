@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

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
                            <h1 align="center" class="jumbotron">Edit Position</h1>
                            @include('dashboard.positions.form')
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
