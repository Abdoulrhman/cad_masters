<?php

namespace App\Http\Controllers;

use App\Models\Authorization;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AuthorizationsController extends Controller
{

    public function index()
    {
        $authorizations = Authorization::latest()->paginate(5);
        return view('dashboard.authorizations.index', compact('authorizations'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.authorizations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $form_data = $request->validate([
            'name'      => 'required|string|max:255',
            'category'  => 'required|string|max:255',
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $form_data['image'] = $request->file('image')->store('images', 'public');
        }

        Log::info("Authorizations created by user: " . auth()->user()->name);
        // log the request data with message
        Log::info("Authorizations created with data: " . json_encode($form_data));

        Authorization::create($form_data);
        return redirect()->route('dashboard.authorizations.index')
            ->with('success', 'Authorizations added successfully.');
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
    public function edit(authorization $authorization)
    {
        return view('dashboard.authorizations.edit', compact('authorization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, authorization $authorization)
    {
        $request->validate([
            'name'       => 'required|min:3',
            'category'   => 'required|min:3',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle Image Upload
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('authorizations', 'public');
            $authorization->update(['image' => $imagePath]);
        }

        $authorization->update($request->except(['image']));

        return redirect()->route('dashboard.authorizations.index')->with('success', 'Authorizations updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $authorization = Authorization::findOrFail($id);
        $authorization->delete();

        return redirect()->route('dashboard.authorizations.index')->with('success', 'Authorizations deleted successfully.');
    }
}
