@extends('layouts.dashboard')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mt-4">{{ $album->title }}</h1>
        <div>
            <a href="{{ route('dashboard.media.albums.index') }}" class="btn btn-secondary">Back to Albums</a>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadMediaModal">
                Upload Media
            </button>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Album Details</h5>
                    <p class="card-text">{{ $album->description }}</p>
                    @if($album->cover_image)
                        <img src="{{ asset('storage/' . $album->cover_image) }}"
                             alt="{{ $album->title }}"
                             class="img-fluid mb-3">
                    @endif
                    <div class="d-grid gap-2">
                        <a href="{{ route('dashboard.media.albums.edit', $album) }}"
                           class="btn btn-primary">
                            Edit Album
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Media Files</h5>
                    <div class="row" id="mediaGrid">
                        @foreach($media as $item)
                            <div class="col-md-4 mb-4" data-id="{{ $item->id }}">
                                <div class="card">
                                    @if(str_starts_with($item->mime_type, 'image/'))
                                        <img src="{{ asset('storage/' . $item->file_path) }}"
                                             class="card-img-top"
                                             alt="{{ $item->title }}"
                                             style="height: 150px; object-fit: cover;">
                                    @else
                                        <div class="card-img-top bg-light text-center p-4" style="height: 150px;">
                                            <i class="fas fa-file fa-3x text-secondary mt-3"></i>
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <h6 class="card-title">{{ $item->title }}</h6>
                                        <p class="card-text small">{{ Str::limit($item->description, 50) }}</p>
                                        <div class="btn-group w-100">
                                            <button type="button"
                                                    class="btn btn-sm btn-outline-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editMediaModal"
                                                    data-media-id="{{ $item->id }}"
                                                    data-media-title="{{ $item->title }}"
                                                    data-media-description="{{ $item->description }}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <form action="{{ route('dashboard.media.destroy', $item) }}"
                                                  method="POST"
                                                  class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Are you sure you want to delete this media?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {{ $media->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Upload Media Modal -->
<div class="modal fade" id="uploadMediaModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Media</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('dashboard.media.store', ['album' => $album->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="album_id" value="{{ $album->id }}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">File</label>
                        <input type="file" class="form-control" id="file" name="file" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Media Modal -->
<div class="modal fade" id="editMediaModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Media</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editMediaForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit_title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="edit_title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_description" class="form-label">Description</label>
                        <textarea class="form-control" id="edit_description" name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize drag and drop sorting
    const mediaGrid = document.getElementById('mediaGrid');
    if (mediaGrid) {
        new Sortable(mediaGrid, {
            animation: 150,
            onEnd: function() {
                const items = [...mediaGrid.children];
                const order = items.map(item => item.dataset.id);

                fetch('{{ route("dashboard.media.reorder", $album) }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ order })
                });
            }
        });
    }

    // Handle edit modal
    const editMediaModal = document.getElementById('editMediaModal');
    if (editMediaModal) {
        editMediaModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const mediaId = button.dataset.mediaId;
            const title = button.dataset.mediaTitle;
            const description = button.dataset.mediaDescription;

            const form = this.querySelector('#editMediaForm');
            form.action = `/dashboard/media/${mediaId}`;
            form.querySelector('#edit_title').value = title;
            form.querySelector('#edit_description').value = description;
        });
    }
});
</script>
@endpush
@endsection
