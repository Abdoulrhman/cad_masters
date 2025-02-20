<?php
namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the courses.
     */
    public function index()
    {
        $courses = Course::latest()->paginate(10);

        return view('dashboard.courses.index', compact('courses'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new course.
     */
    public function create()
    {
        $courseCategories = CourseCategory::all();

        return view('dashboard.courses.create', compact('courseCategories'));
    }

    /**
     * Store a newly created course in storage.
     */
    public function store(CourseRequest $request)
    {
        $form_data = $request->validated();

        if ($request->hasFile('image')) {
            $form_data['image'] = $request->file('image')->store('courses', 'public');
        }

        Log::info("Course created by user: " . auth()->user()->name);
        // log the request data with message
        Log::info("Course created with data: " . json_encode($form_data));

        Course::create($form_data);

        return redirect()->route('dashboard.courses.index')
            ->with('success', 'Course added successfully.');
    }

    /**
     * Show the form for editing the specified course.
     */
    public function edit($id)
    {
        $course           = Course::findOrFail($id);
        $courseCategories = CourseCategory::all();

        return view('dashboard.courses.edit', compact('course', 'courseCategories'));
    }

    /**
     * Update the specified course in storage.
     */
    public function update(CourseRequest $request, Course $course)
    {
        $form_data = $request->validated();

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($course->image && Storage::disk('public')->exists($course->image)) {
                Storage::disk('public')->delete($course->image);
            }

            // Store new image
            $form_data['image'] = $request->file('image')->store('courses', 'public');
        }

        // Update Course
        $course->update($form_data);

        return redirect()->route('dashboard.courses.index')
            ->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified course from storage.
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        // Delete Course Image if Exists
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }

        $course->delete();

        return redirect()->route('dashboard.courses.index')
            ->with('success', 'Course deleted successfully.');
    }
}
