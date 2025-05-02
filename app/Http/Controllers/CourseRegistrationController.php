<?php
namespace App\Http\Controllers;

use App\Mail\CourseRegistrationNotification;
use App\Models\Course;
use App\Models\CourseRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CourseRegistrationController extends Controller
{
    public function showForm(Course $course)
    {
        return view('courses.register', compact('course'));
    }

    public function submit(Request $request, Course $course)
    {
        // Store the CV file
        // $cvPath = $request->file('cv')->store('course-registrations/cv', 'public');

        // Create registration record
        $registration = CourseRegistration::create([
            'course_id'   => $course->id,
            'course_name' => $course->name,
            'first_name'  => $request->first_name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'message'     => $request->message,
        ]);

        // Send email notification
        Mail::to('abdoulrhman_salah@hotmail.com')
            ->send(new CourseRegistrationNotification($registration));

        return redirect()
            ->back()
            ->with('success', 'Your registration has been submitted successfully. We will contact you soon.');
    }
}
