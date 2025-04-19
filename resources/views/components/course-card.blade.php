@props(['course'])

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="relative">
        @if($course->image)
            <img src="{{ asset($course->image) }}" alt="{{ $course->name }}" class="w-full h-48 object-cover">
        @else
            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                <span class="text-3xl text-gray-400">{{ $course->name[0] }}</span>
            </div>
        @endif

        @if($course->price_offer)
            <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-md text-sm">
                -{{ round((($course->price - $course->price_offer) / $course->price) * 100) }}%
            </div>
        @endif
    </div>

    <div class="p-4">
        <div class="flex items-center mb-2">
            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center mr-2">
                <span class="text-sm">60x60</span>
            </div>
            <span class="text-gray-600">{{ $course->instructor ?? 'Instructor' }}</span>
        </div>

        <div class="mb-2">
            <span class="text-sm text-blue-500 bg-blue-50 px-2 py-1 rounded">{{ $course->category->name }}</span>
        </div>

        <div class="flex items-center text-sm text-gray-500 mb-2">
            <span class="mr-4"><i class="far fa-book-open mr-1"></i>{{ $course->hours }} Hours</span>
            <span><i class="far fa-users mr-1"></i>45 Students</span>
        </div>

        <h3 class="text-lg font-semibold mb-2 line-clamp-2">{{ $course->name }}</h3>

        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="flex text-yellow-400">
                    @for($i = 1; $i <= 5; $i++)
                        <i class="fas fa-star"></i>
                    @endfor
                </div>
                <span class="text-sm text-gray-500 ml-1">5.0</span>
            </div>

            <div class="text-right">
                @if($course->price_offer)
                    <span class="text-gray-400 line-through text-sm">${{ number_format($course->price, 2) }}</span>
                    <span class="text-blue-600 font-semibold ml-1">${{ number_format($course->price_offer, 2) }}</span>
                @else
                    <span class="text-blue-600 font-semibold">${{ number_format($course->price, 2) }}</span>
                @endif
            </div>
        </div>
    </div>
</div>
