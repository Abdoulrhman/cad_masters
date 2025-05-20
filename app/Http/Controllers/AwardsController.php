<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
class AwardsController extends Controller
{

    public function index()
    {
        $awards = Award::latest()->paginate(5);
        return view('dashboard.awards.index', compact('awards'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.awards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->validate([
            'name'       => 'required|string|max:255',
            'image'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $form_data['image'] = $request->file('image')->store('images', 'public');
        }

        Log::info("Awards created by user: " . auth()->user()->name);
        // log the request data with message
        Log::info("Awards created with data: " . json_encode($form_data));

        Award::create($form_data);
        return redirect()->route('dashboard.awards.index')
            ->with('success', 'Awards added successfully.');
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
    public function edit(award $award)
    {
        return view('dashboard.awards.edit', compact('award'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, award $award)
    {
        $request->validate([
            'name'      => 'required|min:3',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle Image Upload
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('awards', 'public');
            $award->update(['image' => $imagePath]);
        }

        $award->update($request->except(['image']));

        return redirect()->route('dashboard.awards.index')->with('success', 'Awards updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $awards = Award::findOrFail($id);
        $awards->delete();

        return redirect()->route('dashboard.awards.index')->with('success', 'Awards deleted successfully.');
    }
}

