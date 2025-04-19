<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\MediaAlbum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Display a listing of media items.
     */
    public function index()
    {
        $media = Media::with('album')->latest()->paginate(24);
        return view('dashboard.media.index', compact('media'));
    }

    /**
     * Show the form for creating a new media item.
     */
    public function create(Request $request)
    {
        $albums        = MediaAlbum::all();
        $selectedAlbum = $request->has('album_id') ? MediaAlbum::find($request->album_id) : null;
        return view('dashboard.media.create', compact('albums', 'selectedAlbum'));
    }

    /**
     * Store a newly created media item in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'album_id'    => 'required|exists:media_albums,id',
            'file'        => 'required|file|max:10240', // 10MB max
            'order'       => 'nullable|integer|min:0',
        ]);

        $media              = new Media();
        $media->title       = $validated['title'];
        $media->description = $validated['description'] ?? null;
        $media->album_id    = $validated['album_id'];
        $media->order       = $validated['order'] ?? 0;

        // Store the file
        $path             = $request->file('file')->store('media/files', 'public');
        $media->file_path = $path;
        $media->mime_type = $request->file('file')->getMimeType();
        $media->file_size = $request->file('file')->getSize();

        $media->save();

        return redirect()->route('dashboard.media.albums.show', $media->album_id)
            ->with('success', 'Media item uploaded successfully.');
    }

    /**
     * Display the specified media item.
     */
    public function show(Media $media)
    {
        return view('dashboard.media.show', compact('media'));
    }

    /**
     * Show the form for editing the specified media item.
     */
    public function edit(Media $media)
    {
        $albums = MediaAlbum::all();
        return view('dashboard.media.edit', compact('media', 'albums'));
    }

    /**
     * Update the specified media item in storage.
     */
    public function update(Request $request, Media $media)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'album_id'    => 'required|exists:media_albums,id',
            'file'        => 'nullable|file|max:10240', // 10MB max
            'order'       => 'nullable|integer|min:0',
        ]);

        $media->title       = $validated['title'];
        $media->description = $validated['description'] ?? null;
        $media->album_id    = $validated['album_id'];
        $media->order       = $validated['order'] ?? $media->order;

        if ($request->hasFile('file')) {
            // Delete old file
            Storage::disk('public')->delete($media->file_path);

            // Store new file
            $path             = $request->file('file')->store('media/files', 'public');
            $media->file_path = $path;
            $media->mime_type = $request->file('file')->getMimeType();
        }

        $media->save();

        return redirect()->route('dashboard.media.albums.show', $media->album_id)
            ->with('success', 'Media item updated successfully.');
    }

    /**
     * Remove the specified media item from storage.
     */
    public function destroy(Media $media)
    {
        $albumId = $media->album_id;

        // Delete the file
        Storage::disk('public')->delete($media->file_path);

        $media->delete();

        return redirect()->route('dashboard.media.albums.show', $albumId)
            ->with('success', 'Media item deleted successfully.');
    }

    /**
     * Update the order of media items in an album.
     */
    public function updateOrder(Request $request)
    {
        $validated = $request->validate([
            'items'         => 'required|array',
            'items.*.id'    => 'required|exists:media,id',
            'items.*.order' => 'required|integer|min:0',
        ]);

        foreach ($validated['items'] as $item) {
            Media::where('id', $item['id'])->update(['order' => $item['order']]);
        }

        return response()->json(['message' => 'Order updated successfully']);
    }
}
