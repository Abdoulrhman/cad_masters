<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class MediasController extends Controller
{

    public function index()
    {
        $medias = Media::latest()->paginate(5);
        return view('dashboard.medias.index', compact('medias'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.medias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->validate([
            'name'        => 'required|string|max:255',
            'image.*'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $form_data['image'] = $request->file('image')->store('images', 'public');
        }

        Log::info("Media created by user: " . auth()->user()->name);
        // log the request data with message
        Log::info("Media created with data: " . json_encode($form_data));

        Media::create($form_data);
        return redirect()->route('dashboard.medias.index')
            ->with('success', 'Media added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(media $media)
    {
        return view('dashboard.medias.edit', compact('media'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, media $media)
    {
        $request->validate([
            'name'       => 'required|min:3',

            'image'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle Image Upload
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('medias', 'public');
            $media->update(['image' => $imagePath]);
        }

        $media->update($request->except(['image']));

        return redirect()->route('dashboard.medias.index')->with('success', 'Media updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $media = Authorization::findOrFail($id);
        $media->delete();

        return redirect()->route('dashboard.medias.index')->with('success', 'Media deleted successfully.');
    }
}
