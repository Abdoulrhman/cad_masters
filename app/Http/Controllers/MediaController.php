<?php
namespace App\Http\Controllers;

use App\Models\MediaAlbum;

class MediaController extends Controller
{
    public function index()
    {
        $albums = MediaAlbum::with(['media' => function ($query) {
            $query->orderBy('order');
        }])->latest()->get();

        return view('media', compact('albums'));
    }

    public function show(MediaAlbum $album)
    {
        $album->load(['media' => function ($query) {
            $query->orderBy('order');
        }]);

        return view('media.show', compact('album'));
    }
}
