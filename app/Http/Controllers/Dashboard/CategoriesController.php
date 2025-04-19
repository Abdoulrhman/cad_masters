<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the course categories.
     */
    public function index()
    {
        $categories = CourseCategory::latest()->paginate(10);
        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new course category.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created course category in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:course_categories',
            'description' => 'nullable|string',
        ]);

        CourseCategory::create([
            'name'        => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard.categories.index')
            ->with('success', 'Course category created successfully.');
    }

    /**
     * Show the form for editing the specified course category.
     */
    public function edit(CourseCategory $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified course category in storage.
     */
    public function update(Request $request, CourseCategory $category)
    {
        $request->validate([
            'name'        => 'required|string|max:255|unique:course_categories,name,' . $category->id,
            'description' => 'nullable|string',
        ]);

        $category->update([
            'name'        => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard.categories.index')
            ->with('success', 'Course category updated successfully.');
    }

    /**
     * Remove the specified course category from storage.
     */
    public function destroy(CourseCategory $category)
    {
        $category->delete();

        return redirect()->route('dashboard.categories.index')
            ->with('success', 'Course category deleted successfully.');
    }
}
