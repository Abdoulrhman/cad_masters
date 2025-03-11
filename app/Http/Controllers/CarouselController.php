<?php
namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index()
    {
        $sliders = Carousel::all();
        return view('dashboard.carousel.index', compact('sliders'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'images'      => 'required|array',                    // Expecting multiple images
            'images.*'    => 'image|mimes:jpg,jpeg,png|max:2048', // Each file must be an image
        ]);

        // Create Carousel record first
        $carousel = Carousel::create([
            'title'       => $request->title,
            'description' => $request->description,
        ]);

        // Handle multiple images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('carousel_images', 'public');

                // Save each image to `carousel_images` table
                $carousel->images()->create([
                    'image' => $path,
                ]);
            }
        } else {
            return redirect()->back()->withErrors(['images' => 'Image upload failed.']);
        }

        return redirect()->route('dashboard.carousel.index')->with('success', 'Slider added successfully.');
    }

    public function destroy(Carousel $carousel)
    {
        // Delete all associated images from storage
        foreach ($carousel->images as $image) {
            Storage::disk('public')->delete($image->image);
            $image->delete();
        }

        // Delete the carousel itself
        $carousel->delete();

        return redirect()->route('dashboard.carousel.index')->with('success', 'Slider deleted successfully.');
    }

}
