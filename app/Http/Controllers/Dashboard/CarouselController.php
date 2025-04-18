<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CarouselController extends Controller
{
    /**
     * Display a listing of carousel slides.
     */
    public function index()
    {
        $carousels = Carousel::ordered()->get();
        return view('dashboard.carousel.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new slide.
     */
    public function create()
    {
        return view('dashboard.carousel.create');
    }

    /**
     * Store a newly created slide.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'order'       => 'nullable|integer',
            'is_active'   => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $imagePath          = $request->file('image')->store('carousels', 'public');
            $validated['image'] = $imagePath;
        }

        Carousel::create($validated);

        return redirect()->route('dashboard.carousel.index')
            ->with('success', 'Carousel slide created successfully.');
    }

    /**
     * Show the form for editing the specified slide.
     */
    public function edit(Carousel $carousel)
    {
        return view('dashboard.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified slide.
     */
    public function update(Request $request, Carousel $carousel)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'order'       => 'nullable|integer',
            'is_active'   => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($carousel->image) {
                Storage::disk('public')->delete($carousel->image);
            }
            $imagePath          = $request->file('image')->store('carousels', 'public');
            $validated['image'] = $imagePath;
        }

        $carousel->update($validated);

        return redirect()->route('dashboard.carousel.index')
            ->with('success', 'Carousel slide updated successfully.');
    }

    /**
     * Remove the specified slide.
     */
    public function destroy(Carousel $carousel)
    {
        if ($carousel->image) {
            Storage::disk('public')->delete($carousel->image);
        }

        $carousel->delete();

        return redirect()->route('dashboard.carousel.index')
            ->with('success', 'Slide deleted successfully.');
    }

    /**
     * Update the order of slides.
     */
    public function updateOrder(Request $request)
    {
        $request->validate([
            'items'   => 'required|array',
            'items.*' => [
                'required',
                Rule::exists('carousels', 'id'),
            ],
        ]);

        foreach ($request->items as $index => $id) {
            Carousel::where('id', $id)->update(['order' => $index]);
        }

        return response()->json(['message' => 'Order updated successfully']);
    }
}
