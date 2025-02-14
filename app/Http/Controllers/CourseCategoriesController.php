<?php
namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoriesController extends Controller
{
    public function index()
    {
        $courseCategories = CourseCategory::latest()->paginate(5);
        return view('admin.categories.index', compact('courseCategories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'        => 'required|string|max:255|unique:course_categories,name',
            'description' => 'nullable|string',
        ]);

        CourseCategory::create($validatedData);
        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(string $id)
    {
        $courseCategory = CourseCategory::findOrFail($id);
        return view('admin.categories.edit', compact('courseCategory'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:course_categories,name,' . $id,
            'description' => 'nullable|string',
        ]);

        $courseCategory = CourseCategory::findOrFail($id);
        $courseCategory->update($request->all());

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(string $id)
    {
        $courseCategory = CourseCategory::findOrFail($id);
        $courseCategory->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
