<?php
namespace App\Http\Controllers;

use App\Models\Course;

class CoursesListController extends Controller
{
    public function architecture()
    {
        /* $courses = Course::where('category_id', 1)->get(); // Replace `1` with the actual category ID
        return view('architecture', compact('courses'));*/

        $courses = Course::whereHas('category', function ($query) {
            $query->where('name', 'Architecture'); // Filter by category name
        })->get();
        return view('architecture', compact('courses'));

    }

    public function structure()
    {
        /* $courses = Course::where('category_id', 1)->get(); // Replace `1` with the actual category ID
         return view('structure', compact('courses'));*/

        $courses = Course::whereHas('category', function ($query) {
            $query->where('name', 'Structure'); // Filter by category name
        })->get();

        return view('structure', compact('courses'));

    }

    public function management()
    {
        /* $courses = Course::where('category_id', 1)->get(); // Replace `1` with the actual category ID
        return view('management', compact('courses'));*/

        $courses = Course::whereHas('category', function ($query) {
            $query->where('name', 'Management'); // Filter by category name
        })->get();

        return view('management', compact('courses'));
    }

    public function mechanical()
    {
        /* $courses = Course::where('category_id', 1)->get(); // Replace `1` with the actual category ID
         return view('mechanical', compact('courses'));*/

        $courses = Course::whereHas('category', function ($query) {
            $query->where('name', 'Mechanical'); // Filter by category name
        })->get();

        return view('mechanical', compact('courses'));
    }

    public function bim()
    {
        /* $courses = Course::where('category_id', 1)->get(); // Replace `1` with the actual category ID
        return view('bim', compact('courses'));*/

        $courses = Course::whereHas('category', function ($query) {
            $query->where('name', 'Bim'); // Filter by category name
        })->get();

        return view('bim', compact('courses'));
    }

    public function electrical()
    {
        /* $courses = Course::where('category_id', 1)->get(); // Replace `1` with the actual category ID
        return view('electrical', compact('courses'));*/

        $courses = Course::whereHas('category', function ($query) {
            $query->where('name', 'electrical'); // Filter by category name
        })->get();

        return view('electrical', compact('courses'));
    }

    public function graphics()
    {
        /* $courses = Course::where('category_id', 1)->get(); // Replace `1` with the actual category ID
        return view('graphics', compact('courses'));*/

        $courses = Course::whereHas('category', function ($query) {
            $query->where('name', 'Graphics'); // Filter by category name
        })->get();

        return view('graphics', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::with('category')->findOrFail($id);

        $relatedCourses = Course::where('category_id', $course->category_id)
            ->where('id', '!=', $id)
            ->with('category')
            ->limit(3)
            ->get();


        return view('courses.show', [
            'course' => $course,
            'relatedCourses' => $relatedCourses
        ]);
        return view('courses.show', compact('course', 'relatedCourses'));

    }

}
