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
    public function edit(string $id)
    {
        $partners = Partner::findOrFail($id);
        return view('dashboard.partners.edit', compact('partners'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $partners = Partner::findOrFail($id);

        // Manual validation
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string|max:255',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator) // Send validation errors to the view
                ->withInput(); // Retain old input values
        }

        $form_data = $validator->validated(); // Get validated data

        if ($request->hasFile('image')) {
            // Delete old Image if exists
            if ($partners->image && Storage::disk('public')->exists($partners->image)) {
                Storage::disk('public')->delete($partners->image);
            }

            // Store new Image
            $form_data['image'] = $request->file('image')->store('images', 'public');
        }

        $partners->update($form_data);
        return redirect()->route('dashboard.partners.index')
            ->with('success', 'Partners updated successfully.');
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
