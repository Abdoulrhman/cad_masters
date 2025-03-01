<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(10);

        return view('dashboard.students.index', compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('dashboard.students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required|min:3',
            'email'  => 'required|email|unique:students',
            'phone'  => 'nullable|string',
            'dob'    => 'nullable|date',
            'gender' => 'nullable|in:male,female',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle Image Upload
        $imagePath = $request->file('image') ? $request->file('image')->store('students', 'public') : null;

        Student::create([
            'name'   => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'dob'    => $request->dob,
            'gender' => $request->gender,
            'image'  => $imagePath,
        ]);

        return redirect()->route('dashboard.students.index')->with('success', 'Student added successfully.');
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
        $request->validate([
            'name'   => 'required|min:3',
            'email'  => 'required|email|unique:students,email,' . $student->id,
            'phone'  => 'nullable|string',
            'dob'    => 'nullable|date',
            'gender' => 'nullable|in:male,female',
            'image'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle Image Upload
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('students', 'public');
            $student->update(['image' => $imagePath]);
        }

        $student->update($request->except(['image']));

        return redirect()->route('dashboard.students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('dashboard.students.index')->with('success', 'Student deleted successfully.');
    }
}
