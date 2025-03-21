@extends('layouts.app')

@section('content')
<div class="bg-gray-50 min-h-screen py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">All Courses</h1>
                <p class="mt-2 text-sm text-gray-600">We have the largest collection of {{ $courses->total() }} courses
                </p>
            </div>
        </div>

        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center space-x-4">
                <button
                    class="flex items-center px-4 py-2 bg-white rounded-md shadow-sm {{ request('view', 'grid') === 'grid' ? 'text-blue-600' : 'text-gray-600' }}"
                    onclick="window.location.href='{{ request()->fullUrlWithQuery(['view' => 'grid']) }}'">
                    <i class="fas fa-grid-2 mr-2"></i> Grid
                </button>
                <button
                    class="flex items-center px-4 py-2 bg-white rounded-md shadow-sm {{ request('view') === 'list' ? 'text-blue-600' : 'text-gray-600' }}"
                    onclick="window.location.href='{{ request()->fullUrlWithQuery(['view' => 'list']) }}'">
                    <i class="fas fa-list mr-2"></i> List
                </button>
                <span class="text-sm text-gray-500">Showing
                    {{ $courses->firstItem() ?? 0 }}-{{ $courses->lastItem() ?? 0 }} of {{ $courses->total() }}
                    results</span>
            </div>

            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" name="search" placeholder="Search for Courses..."
                        class="w-64 pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ request('search') }}" onchange="this.form.submit()">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>

                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg flex items-center"
                    onclick="document.getElementById('filters').classList.toggle('hidden')">
                    <i class="fas fa-filter mr-2"></i> Filter
                </button>
            </div>
        </div>

        <div class="grid grid-cols-12 gap-6">
            <!-- Filters Sidebar -->
            <div id="filters"
                class="col-span-3 space-y-6 {{ request()->hasAny(['category', 'price_min', 'price_max']) ? '' : 'hidden' }} lg:block">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-4">Categories</h3>
                    <div class="space-y-2">
                        @foreach($categories as $category)
                        <label class="flex items-center">
                            <input type="checkbox" name="category[]" value="{{ $category->id }}"
                                {{ in_array($category->id, (array)request('category')) ? 'checked' : '' }}
                                class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            <span class="ml-2 text-gray-700">{{ $category->name }}</span>
                        </label>
                        @endforeach
                    </div>

                    <div class="mt-6">
                        <h3 class="text-lg font-semibold mb-4">Price Range</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="text-sm text-gray-600">Min Price</label>
                                <input type="number" name="price_min" value="{{ request('price_min') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="text-sm text-gray-600">Max Price</label>
                                <input type="number" name="price_max" value="{{ request('price_max') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>

                    <button
                        class="mt-6 w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors">
                        Apply Filters
                    </button>
                </div>
            </div>

            <!-- Course Grid -->
            <div class="col-span-12 lg:col-span-9">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($courses as $course)
                    <x-course-card :course="$course" />
                    @endforeach
                </div>

                <div class="mt-8">
                    {{ $courses->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
@endpush
