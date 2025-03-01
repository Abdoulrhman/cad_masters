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
            'image'       => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('carousel_images', 'public');

            Carousel::create([
                'title'       => $request->title,
                'description' => $request->description,
                'image'       => $path,
            ]);
        } else {
            return redirect()->back()->withErrors(['image' => 'Image upload failed.']);
        }

        return redirect()->route('dashboard.carousel.index')->with('success', 'Slider added successfully.');
    }

    public function destroy(Carousel $carousel)
    {
        foreach ($carousel->images as $image) {
            Storage::disk('public')->delete($image->image);
            $image->delete();
        }

        $carousel->delete();
        return redirect()->route('dashboard.carousel.index')->with('success', 'Slider deleted successfully.');
    }
}
