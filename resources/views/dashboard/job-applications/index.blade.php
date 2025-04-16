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
                            <h1 align="center" class="jumbotron">Job Applications</h1>

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table" id="applicationsTable">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($applications as $application)
                                        <tr>
                                            <td>{{ $application->created_at->format('Y-m-d') }}</td>
                                            <td>{{ $application->full_name }}</td>
                                            <td>{{ $application->email }}</td>
                                            <td>{{ $application->phone }}</td>
                                            <td>{{ $application->position }}</td>
                                            <td>
                                                <select class="form-select status-select"
                                                        data-application-id="{{ $application->id }}"
                                                        onchange="updateStatus({{ $application->id }}, this.value)">
                                                    <option value="pending" {{ $application->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="reviewed" {{ $application->status == 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                                                    <option value="interviewed" {{ $application->status == 'interviewed' ? 'selected' : '' }}>Interviewed</option>
                                                    <option value="accepted" {{ $application->status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                                                    <option value="rejected" {{ $application->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button class="tp-btn tp-btn-sm" onclick="viewApplication({{ $application->id }})">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <a href="{{ Storage::url($application->resume_path) }}" class="tp-btn tp-btn-sm" target="_blank">
                                                        <i class="fas fa-file-download"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Application Details Modal -->
<div class="modal fade" id="applicationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Application Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="applicationDetails"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.status-select {
    min-width: 120px;
    padding: 5px;
    border-radius: 4px;
    border: 1px solid #e2e2e2;
}

.table td {
    vertical-align: middle;
}

.tp-btn-sm {
    padding: 5px 10px;
    font-size: 14px;
}

#applicationsTable {
    width: 100% !important;
}
</style>
@endpush

@push('scripts')
<script>
function updateStatus(applicationId, status) {
    fetch(`/dashboard/job-applications/${applicationId}/status`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ status: status })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            toastr.success('Status updated successfully');
        } else {
            toastr.error('Error updating status');
        }
    });
}

function viewApplication(applicationId) {
    fetch(`/dashboard/job-applications/${applicationId}`)
        .then(response => response.json())
        .then(data => {
            const details = `
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Name:</strong> ${data.full_name}</p>
                        <p><strong>Email:</strong> ${data.email}</p>
                        <p><strong>Phone:</strong> ${data.phone}</p>
                        <p><strong>Position:</strong> ${data.position}</p>
                    </div>
                    <div class="col-md-12">
                        <p><strong>Experience:</strong></p>
                        <p>${data.experience}</p>
                        <p><strong>Skills:</strong></p>
                        <p>${data.skills}</p>
                        ${data.cover_letter ? `
                            <p><strong>Cover Letter:</strong></p>
                            <p>${data.cover_letter}</p>
                        ` : ''}
                    </div>
                </div>
            `;
            document.getElementById('applicationDetails').innerHTML = details;
            new bootstrap.Modal(document.getElementById('applicationModal')).show();
        });
}

$(document).ready(function() {
    $('#applicationsTable').DataTable({
        order: [[0, 'desc']],
        responsive: true,
        language: {
            search: "",
            searchPlaceholder: "Search applications..."
        }
    });
});
</script>
@endpush
