<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->paginate(5);
        return view('admin.courses.index', compact('courses'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $courseCategories = CourseCategory::all();
        return view('admin.courses.create', compact('courseCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hours'         => 'nullable|string',
            'schedule_time' => 'nullable|date_format:H:i',
            'branch'        => 'nullable|string|max:255',
            'price'         => 'nullable|numeric|min:0',
            'price_offer'   => 'nullable|numeric|min:0',
            'category_id'   => 'required|exists:course_categories,id',
        ]);

        $form_data = $request->except('_token', '_method');

        // Handle image upload
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
            $form_data['image'] = $image_name;
        }

        Course::create($form_data);
        return redirect()->route('admin.courses.index')->with('success', 'Course added successfully.');
    }

    public function edit(string $id)
    {
        $course           = Course::findOrFail($id);
        $courseCategories = CourseCategory::all(); // Fetch categories if needed
        return view('admin.courses.edit', compact('course', 'courseCategories'));
    }

    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);

        $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hours'         => 'nullable|string',
            'schedule_time' => 'nullable|date_format:H:i',
            'branch'        => 'nullable|string|max:255',
            'price'         => 'nullable|numeric|min:0',
            'price_offer'   => 'nullable|numeric|min:0',
            'category_id'   => 'required|exists:course_categories,id',
        ]);

        $image_name = $course->image;
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }

        $course->update(array_merge($request->all(), ['image' => $image_name]));

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }
}
