<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Branch;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    /**
     * Display a listing of the courses.
     */
    public function index(Request $request)
    {
        $query = Course::query()->with('category');

        // Search filter
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

        // Category filter
        if ($request->filled('category')) {
            $query->whereIn('category_id', $request->category);
        }

        // Price range filter
        if ($request->filled('price_range')) {
            switch ($request->price_range) {
                case 'free':
                    $query->where('price', 0);
                    break;
                case 'paid':
                    $query->where('price', '>', 0);
                    break;
            }
        }

        // Sorting
        switch ($request->get('sort', 'latest')) {
            case 'price_low':
                $query->orderBy('price', 'asc');
                break;
            case 'price_high':
                $query->orderBy('price', 'desc');
                break;
            case 'latest':
            default:
                $query->latest();
                break;
        }

        $courses    = $query->paginate(12)->withQueryString();
        $categories = CourseCategory::all();

        return view('dashboard.courses.index', [
            'courses'    => $courses,
            'categories' => $categories,
            'filters'    => $request->all(),
        ]);
    }

    /**
     * Show the form for creating a new course.
     */
    public function create()
    {
        $courseCategories = CourseCategory::all();
        $instructors      = \App\Models\Instructor::all();
        $branches         = Branch::all();
        return view('dashboard.courses.create', compact('courseCategories', 'instructors', 'branches'));
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

        // Ensure branch_id is set if present in the request
        if ($request->has('branch_id')) {
            $form_data['branch_id'] = $request->branch_id;
        }

        // Save the course
        $course = Course::create($form_data);

        // Save course sessions if provided
        if ($request->has('sessions')) {
            foreach ($request->sessions as $session) {
                if (! empty($session['start_date']) && ! empty($session['end_date'])) {
                    $course->sessions()->create([
                        'start_date' => $session['start_date'],
                        'end_date'   => $session['end_date'],
                    ]);
                }
            }
        }

        return redirect()->route('dashboard.courses.index')
            ->with('success', 'Course created successfully.');
    }

    /**
     * Show the form for editing the specified course.
     */
    public function edit($id)
    {
        $course           = Course::findOrFail($id);
        $courseCategories = CourseCategory::all();
        $branches         = Branch::all();
        $instructors      = \App\Models\Instructor::all();
        return view('dashboard.courses.edit', compact('course', 'courseCategories', 'branches', 'instructors'));
    }

    /**
     * Update the specified course in storage.
     */
    public function update(CourseRequest $request, Course $course)
    {
        $form_data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($course->image && Storage::disk('public')->exists($course->image)) {
                Storage::disk('public')->delete($course->image);
            }

            // Store new image
            $form_data['image'] = $request->file('image')->store('courses', 'public');
        } else {
            // Keep existing image if no new one is uploaded
            unset($form_data['image']);
        }

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