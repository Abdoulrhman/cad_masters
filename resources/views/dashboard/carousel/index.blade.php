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
                            <h1 class="text-center mb-4">Carousel Management</h1>

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            <div class="text-end mb-3">
                                <a href="{{ route('dashboard.carousel.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Add New Slide
                                </a>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-striped" id="carouselTable">
                                        <thead>
                                            <tr>
                                                <th style="width: 50px;">Order</th>
                                                <th style="width: 150px;">Image</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th style="width: 150px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="sortable">
                                            @foreach($carousels as $carousel)
                                            <tr data-id="{{ $carousel->id }}">
                                                <td class="handle" style="cursor: move;">
                                                    <i class="fas fa-grip-vertical"></i>
                                                    <span class="order-number">{{ $carousel->order }}</span>
                                                </td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $carousel->image) }}" alt="{{ $carousel->title }}"
                                                        class="img-thumbnail" style="max-height: 50px;">
                                                </td>
                                                <td>{{ $carousel->title }}</td>
                                                <td>{{ Str::limit($carousel->description, 100) }}</td>
                                                <td>
                                                    <span class="badge {{ $carousel->is_active ? 'bg-success' : 'bg-danger' }}">
                                                        {{ $carousel->is_active ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="{{ route('dashboard.carousel.edit', $carousel) }}" class="btn btn-sm btn-primary">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('dashboard.carousel.destroy', $carousel) }}" method="POST"
                                                        class="d-inline"
                                                        onsubmit="return confirm('Are you sure you want to delete this slide?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var el = document.getElementById('sortable');
    var sortable = new Sortable(el, {
        handle: '.handle',
        animation: 150,
        onEnd: function() {
            let items = [];
            document.querySelectorAll('#sortable tr').forEach((tr, index) => {
                items.push({
                    id: tr.dataset.id,
                    order: index
                });
                tr.querySelector('.order-number').textContent = index;
            });

            fetch('{{ route("dashboard.carousel.updateOrder") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        items: items
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Order updated successfully');
                })
                .catch(error => {
                    console.error('Error updating order:', error);
                });
        }
    });
});
</script>
@endpush
@endsection
