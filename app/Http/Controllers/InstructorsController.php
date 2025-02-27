<?php

namespace App\Http\Controllers;


use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructors = Instructor::latest()->paginate(5);
        return view('dashboard.instructors.index', compact('instructors'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'title'   => 'nullable|string|max:255',
            'image'  => 'nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048',

        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images', 'public');
        }

        Log::info("Instructors created by user: " . auth()->user()->name);
        // log the request data with message
        Log::info("Instructors created with data: " . json_encode($validatedData));

        Instructor::create($validatedData);
        return redirect()->route('dashboard.instructors.index')
            ->with('success', 'Instructors added successfully.');
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
        $instructors = Instructor::findOrFail($id);
        return view('dashboard.instructors.edit', compact('instructors'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $instructors = Instructor::findOrFail($id);

        // Manual validation
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string|max:255',
            'title'   => 'nullable|string|max:255',
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
            if ($instructors->image && Storage::disk('public')->exists($instructors->image)) {
                Storage::disk('public')->delete($instructors->image);
            }

            // Store new Image
            $form_data['image'] = $request->file('image')->store('images', 'public');
        }

        $instructors->update($form_data);
        return redirect()->route('dashboard.instructors.index')
            ->with('success', 'Instructors updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instructors = Instructor::findOrFail($id);
        $instructors->delete();
        return redirect()->route('dashboard.instructors.index')->with('success', 'Instructors deleted successfully.');
    }
}
