<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::latest()->paginate(5);
        return view('dashboard.partners.index', compact('partners'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->validate([
            'name'    => 'required|string|max:255',
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $form_data['image'] = $request->file('image')->store('images', 'public');
        }

        Log::info("Partner created by user: " . auth()->user()->name);
        // log the request data with message
        Log::info("Partner created with data: " . json_encode($form_data));

        Partner::create($form_data);
        return redirect()->route('dashboard.partners.index')
            ->with('success', 'Partner added successfully.');
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
    public function edit(Partner $partner)
    {
        return view('dashboard.partners.edit', compact('partner'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)

    {
        $request->validate([
            'name'   => 'required|min:3',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle Image Upload
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('partners', 'public');
            $partner->update(['image' => $imagePath]);
        }

        $partner->update($request->except(['image']));

        return redirect()->route('dashboard.partners.index')->with('success', 'Partners updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partners = Partner::findOrFail($id);
        $partners->delete();
        return redirect()->route('dashboard.partners.index')->with('success', 'Partner deleted successfully.');
    }
}
