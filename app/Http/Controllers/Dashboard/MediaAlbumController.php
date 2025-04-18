<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MediaAlbum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaAlbumController extends Controller
{
    /**
     * Display a listing of the media albums.
     */
    public function index()
    {
        $albums = MediaAlbum::withCount('media')->latest()->paginate(12);
        return view('dashboard.media.albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new media album.
     */
    public function create()
    {
        return view('dashboard.media.albums.create');
    }

    /**
     * Store a newly created media album in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|max:2048',
        ]);

        $album              = new MediaAlbum();
        $album->title       = $validated['title'];
        $album->description = $validated['description'] ?? null;
        $album->slug        = Str::slug($validated['title']);

        if ($request->hasFile('cover_image')) {
            $path               = $request->file('cover_image')->store('media/albums', 'public');
            $album->cover_image = $path;
        }

        $album->save();

        return redirect()->route('dashboard.media.albums.show', $album)
            ->with('success', 'Album created successfully.');
    }

    /**
     * Display the specified media album.
     */
    public function show(MediaAlbum $album)
    {
        $media = $album->media()->orderBy('order')->paginate(12);
        return view('dashboard.media.albums.show', compact('album', 'media'));
    }

    /**
     * Show the form for editing the specified media album.
     */
    public function edit(MediaAlbum $album)
    {
        return view('dashboard.media.albums.edit', compact('album'));
    }

    /**
     * Update the specified media album in storage.
     */
    public function update(Request $request, MediaAlbum $album)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'nullable|image|max:2048',
        ]);

        $album->title       = $validated['title'];
        $album->description = $validated['description'] ?? null;
        $album->slug        = Str::slug($validated['title']);

        if ($request->hasFile('cover_image')) {
            // Delete old cover image if it exists
            if ($album->cover_image) {
                Storage::disk('public')->delete($album->cover_image);
            }

            $path               = $request->file('cover_image')->store('media/albums', 'public');
            $album->cover_image = $path;
        }

        $album->save();

        return redirect()->route('dashboard.media.albums.show', $album)
            ->with('success', 'Album updated successfully.');
    }

    /**
     * Remove the specified media album from storage.
     */
    public function destroy(MediaAlbum $album)
    {
        // Delete cover image if it exists
        if ($album->cover_image) {
            Storage::disk('public')->delete($album->cover_image);
        }

        // Delete all associated media files
        foreach ($album->media as $media) {
            Storage::disk('public')->delete($media->file_path);
            $media->delete();
        }

        $album->delete();

        return redirect()->route('dashboard.media.albums.index')
            ->with('success', 'Album deleted successfully.');
    }
}
