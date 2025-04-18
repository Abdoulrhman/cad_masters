<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseRegistration;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        // Get active courses count
        $activeCourses = Course::where('is_active', true)->count();

        // Get enrolled courses count
        $enrolledCourses = CourseRegistration::count();

        // Get completed courses count
        $completedCourses = CourseRegistration::where('status', 'completed')->count();

        // Get total students count
        $totalStudents = Student::count();

        // Get total courses count
        $totalCourses = Course::count();

        // Get total earnings
        $totalEarnings = CourseRegistration::sum('amount');

        return view('dashboard.index', compact(
            'activeCourses',
            'enrolledCourses',
            'completedCourses',
            'totalStudents',
            'totalCourses',
            'totalEarnings'
        ));
    }
}
