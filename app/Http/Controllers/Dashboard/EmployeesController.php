<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeesController extends Controller
{
    /**
     * Display a listing of employees.
     */
    public function index()
    {
        $employees = Employee::paginate(10);
        return view('dashboard.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new employee.
     */
    public function create()
    {
        return view('dashboard.employees.create');
    }

    /**
     * Store a newly created employee.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:employees,email',
            'phone'    => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath          = $request->file('image')->store('employees', 'public');
            $validated['image'] = $imagePath;
        }

        Employee::create($validated);

        return redirect()->route('dashboard.employees.index')
            ->with('success', 'Employee created successfully.');
    }

    /**
     * Show the form for editing the specified employee.
     */
    public function edit(Employee $employee)
    {
        return view('dashboard.employees.edit', compact('employee'));
    }

    /**
     * Update the specified employee.
     */
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:employees,email,' . $employee->id,
            'phone'    => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($employee->image) {
                Storage::disk('public')->delete($employee->image);
            }
            $imagePath          = $request->file('image')->store('employees', 'public');
            $validated['image'] = $imagePath;
        }

        $employee->update($validated);

        return redirect()->route('dashboard.employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified employee.
     */
    public function destroy(Employee $employee)
    {
        if ($employee->image) {
            Storage::disk('public')->delete($employee->image);
        }

        $employee->delete();

        return redirect()->route('dashboard.employees.index')
            ->with('success', 'Employee deleted successfully.');
    }
}
