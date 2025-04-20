<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::paginate(10);
        return view('dashboard.students.index', compact('students'));
    }

    public function create()
    {
        return view('dashboard.students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:students,email',
            'phone'   => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        Student::create($validated);

        return redirect()->route('dashboard.students.index')
            ->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        return view('dashboard.students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('dashboard.students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|unique:students,email,' . $student->id,
            'phone'   => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $student->update($validated);

        return redirect()->route('dashboard.students.index')
            ->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('dashboard.students.index')
            ->with('success', 'Student deleted successfully.');
    }
}
