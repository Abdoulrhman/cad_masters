<?php

namespace App\Http\Controllers;


use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::latest()->paginate(5);
        return view('dashboard.branches.index', compact('branches'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.branches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255'
        ]);


        Log::info("Branches created by user: " . auth()->user()->name);
        // log the request data with message
        Log::info("Branches created with data: " . json_encode($validatedData));

        Branch::create($validatedData);
        return redirect()->route('dashboard.branches.index')
            ->with('success', 'Branches added successfully.');
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
    public function edit(Branch $branch)
    {

        return view('dashboard.branches.edit', compact('branch'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'name'   => 'required|min:3'
        ]);

        return redirect()->route('dashboard.branches.index')->with('success', 'Branch updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $branches = Branch::findOrFail($id);
        $branches->delete();
        return redirect()->route('dashboard.branches.index')->with('success', 'Branch deleted successfully.');
    }
}
