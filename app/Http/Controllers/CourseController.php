<?php
namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Branch;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the courses.
     */
    public function index(Request $request)
    {
        $query = Course::query()->with('categories');

        // Search filter
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

        // Category filter (many-to-many)
        if ($request->filled('category')) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->whereIn('course_categories.id', $request->category);
            });
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

        $courses = $query->paginate(12)->withQueryString();

        // Debug: Log the first course's category if it exists
        if ($courses->count() > 0) {
            Log::info('First course category: ' . json_encode($courses->first()->categories));

            // Additional debugging - check the current request URL
            Log::info('Current URL: ' . request()->url());
            Log::info('Current route name: ' . request()->route()->getName());

            // Dump the category ID to make sure it's set
            $firstCourse = $courses->first();
            Log::info('Category ID: ' . $firstCourse->categories->first()->id);
            Log::info('Category object: ' . ($firstCourse->categories->first() ? 'Found' : 'Not found'));

            // Add a debug message to the session
            if ($firstCourse->categories->isEmpty()) {
                session()->flash('debug', 'Category relationship not found for course #' . $firstCourse->id);
            }
        }

        $categories = CourseCategory::all();

        // Check if we're accessing from dashboard
        if ($request->route()->getName() === 'dashboard.courses.index') {
            return view('dashboard.courses.index', [
                'courses'    => $courses,
                'categories' => $categories,
                'filters'    => $request->all(),
            ]);
        }

        // Return public view
        return view('courses.index', [
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
        $branches         = Branch::all();
        $instructors      = Instructor::all();
        return view('dashboard.courses.create', compact('courseCategories', 'branches', 'instructors'));
    }

    /**
     * Store a newly created course in storage.
     */
    public function store(CourseRequest $request)
    {
        $form_data = $request->validated();

        // No need to sanitize description as we're using a rich text editor
        // $form_data['description'] is already passed through validation

        if ($request->hasFile('image')) {
            $form_data['image'] = $request->file('image')->store('courses', 'public');
        }

        // Save the course
        $course = Course::create($form_data);

        // Attach categories
        if ($request->has('categories')) {
            $course->categories()->attach($request->categories);
        }

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

        Log::info("Course created by user: " . auth()->user()->name);
        Log::info("Course created with data: " . json_encode($form_data));

        return redirect()->route('courses.index')
            ->with('success', 'Course added successfully.');
    }

    /**
     * Show the form for editing the specified course.
     */
    public function edit($id)
    {
        $course           = Course::with('categories')->findOrFail($id);
        $courseCategories = CourseCategory::all();
        $branches         = Branch::all();
        $instructors      = Instructor::all();

        return view('dashboard.courses.edit', compact('course', 'courseCategories', 'branches', 'instructors'));
    }

    /**
     * Update the specified course in storage.
     */
    public function update(CourseRequest $request, Course $course)
    {
        $form_data = $request->validated();

        // No need to sanitize description as we're using a rich text editor
        // $form_data['description'] is already passed through validation

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

        // Sync categories
        if ($request->has('categories')) {
            $course->categories()->sync($request->categories);
        } else {
            $course->categories()->detach();
        }

        return redirect()->route('courses.index')
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

    public function show(Course $course)
    {
        \Log::info('Show method called for course', ['id' => $course->id]);
        $course->load(['categories', 'sessions.branch', 'instructors', 'certificates']);
        \Log::info('Session count:', ['count' => $course->sessions->count()]);
        foreach ($course->sessions as $session) {
            \Log::info('Session branch:', $session->branch ? $session->branch->toArray() : ['branch' => null]);
        }
        return view('courses.show', compact('course'));
    }

    /**
     * AJAX search for courses by name.
     */
    public function search(Request $request)
    {
        $q       = $request->get('q');
        $courses = Course::where('name', 'like', "%{$q}%")
            ->orderBy('name')
            ->limit(10)
            ->get(['id', 'name']);
        return response()->json($courses);
    }
}
