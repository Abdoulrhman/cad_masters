<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(5);
        return view('dashboard.employees.index', compact('employees'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email|max:255|unique:employees,email',
            'number'  => 'nullable|string|regex:/^\+?[0-9]{10,15}$/|unique:employees,number',
            'subject' => 'nullable|string|max:255',
            'pdf'     => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Sanitize the mobile number (remove non-numeric characters except +)
        if ($request->has('number')) {
            $validatedData['number'] = preg_replace('/[^0-9\+]/', '', $request->input('number'));
        }

        // Handle file upload
        if ($request->hasFile('pdf')) {
            $validatedData['pdf'] = $request->file('pdf')->store('pdfs', 'public');
        }

        Log::info("Applicant created by user: " . auth()->user()->name);
        // log the request data with message
        Log::info("Applicant created with data: " . json_encode($validatedData));

        Employee::create($validatedData);
        return redirect()->route('dashboard.employees.index')
            ->with('success', 'Applicant added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {

        return view('dashboard.employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name'    => 'required|min:3',
            'email'   => 'required|email|unique:students,email,' . $employee->id,
            'number'  => 'nullable|string',
            'subject' => 'nullable|string|max:255',
            'pdf'     => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Handle Image Upload
        if ($request->file('pdf')) {
            $pdfPath = $request->file('pdf')->store('pdfs', 'public');
            $employee->update(['pdf' => $pdfPath]);
        }

        $employee->update($request->except(['pdf']));

        return redirect()->route('dashboard.employees.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employees = Employee::findOrFail($id);
        $employees->delete();
        return redirect()->route('dashboard.employees.index')->with('success', 'Applicant deleted successfully.');
    }



    public function downloadPdf($id)
    {
        $employee = Employee::findOrFail($id);

        if ($employee->pdf && Storage::disk('public')->exists($employee->pdf)) {
            return Storage::disk('public')->download($employee->pdf);
        }

        return redirect()->back()->with('error', 'PDF file not found.');
    }
}
