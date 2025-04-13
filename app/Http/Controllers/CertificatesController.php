<?php

namespace App\Http\Controllers;


use App\Models\Certificate;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CertificatesController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest()->paginate(5);
        return view('dashboard.certificates.index', compact('certificates'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.certificates.create');
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

        Log::info("Certificates created by user: " . auth()->user()->name);
        // log the request data with message
        Log::info("Certificates created with data: " . json_encode($form_data));

        Certificate::create($form_data);
        return redirect()->route('dashboard.certificates.index')
            ->with('success', 'Certificates added successfully.');
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
    public function edit(certificate $certificate)
    {
        return view('dashboard.certificates.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, certificate $certificate)
    {
        $request->validate([
            'name'   => 'required|min:3',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle Image Upload
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('certificates', 'public');
            $certificate->update(['image' => $imagePath]);
        }

        $certificate->update($request->except(['image']));

        return redirect()->route('dashboard.certificates.index')->with('success', 'Certificate updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $certificate = Certificate::findOrFail($id);
        $certificate->delete();

        return redirect()->route('dashboard.certificates.index')->with('success', 'Certificates deleted successfully.');
    }
}
