<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::latest()->paginate(5);
        return view('dashboard.clients.index', compact('clients'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.clients.create');
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

        Log::info("Client created by user: " . auth()->user()->name);
        // log the request data with message
        Log::info("Client created with data: " . json_encode($form_data));

        Client::create($form_data);
        return redirect()->route('dashboard.clients.index')
            ->with('success', 'Client added successfully.');
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
        $clients = Client::findOrFail($id);
        return view('dashboard.clients.edit', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clients = Client::findOrFail($id);

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
            if ($clients->image && Storage::disk('public')->exists($clients->image)) {
                Storage::disk('public')->delete($clients->image);
            }

            // Store new Image
            $form_data['image'] = $request->file('image')->store('images', 'public');
        }

        $clients->update($form_data);
        return redirect()->route('dashboard.clients.index')
            ->with('success', 'Clients updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clients = Client::findOrFail($id);
        $clients->delete();

        return redirect()->route('dashboard.clients.index')->with('success', 'Clients deleted successfully.');
    }
}
