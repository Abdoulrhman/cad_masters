<div class="order-table">
    @if(session('debug'))
    <div class="alert alert-info">Debug: {{ session('debug') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                @foreach ($headers as $header)
                <th>{{ ucfirst(str_replace('_', ' ', $header)) }}</th>
                @endforeach
                @if(isset($actions) && $actions)
                <th>Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>

                @foreach ($headers as $header)
                <td>
                    @if($header === 'image' && !empty($item->image))
                    <img src="{{ asset('storage/' . $item->image) }}" class="img-thumbnail" width="50">
                    @elseif($header === 'outline_link' && !empty($item->outline_link))
                    <a href="{{ $item->outline_link }}" target="_blank">Outline</a>
                    @elseif($header === 'youtube_link' && !empty($item->youtube_link))
                    <a href="{{ $item->youtube_link }}" target="_blank">YouTube</a>
                    @elseif($header === 'created_at' || $header === 'updated_at')
                    {{ $item->$header->diffForHumans() }}
                    @elseif($header === 'category')
                    @if(isset($item->category_id))
                    <!-- Debug info -->
                    <small class="text-muted d-block">ID: {{ $item->category_id }}</small>
                    @if($item->category)
                    {{ $item->category->name ?? 'N/A' }}
                    @else
                    <span class="text-danger">No category relation found</span>
                    @endif
                    @else
                    <span class="text-danger">No category_id</span>
                    @endif
                    @elseif(str_contains($header, '_id'))
                    @php
                    $relation = str_replace('_id', '', $header);
                    $relationObj = $item->$relation;
                    @endphp
                    {{ $relationObj->name ?? 'N/A' }}
                    @elseif(method_exists($item, $header))
                    @php
                    $relation = $item->$header;
                    @endphp
                    {{ $relation ? $relation->name : 'N/A' }}
                    @elseif($header === 'description')
                    {!! Str::limit($item->$header ?? 'N/A', 100) !!}
                    @else
                    {{ $item->$header ?? 'N/A' }}
                    @endif
                </td>
                @endforeach

                @if(isset($actions) && $actions)
                <td>
                    <div class="d-flex gap-2">
                        <a href="{{ route($actions['edit'], $item->id) }}" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-edit"></i>
                        </a>
                        <form action="{{ route($actions['delete'], $item->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure?')">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                        @if(isset($actions['pdf']) && !empty($item->pdf))
                        <a href="{{ Storage::url($item->pdf) }}" download class="btn btn-sm btn-primary">
                            <i class="fas fa-download"></i> PDF
                        </a>
                        @endif
                    </div>
                </td>
                @endif
            </tr>
            @empty
            <tr>
                <td colspan="{{ count($headers) + 2 }}" class="text-center">No records found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>