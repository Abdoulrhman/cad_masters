<?php
namespace App\Http\Controllers;

use App\Mail\NewJobApplication;
use App\Models\JobApplication;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    public function index()
    {
        $positions = Position::where('is_active', true)->get();
        return view('careers.index', compact('positions'));
    }

    public function apply(Request $request)
    {
        $request->validate([
            'full_name'    => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone'        => 'required|string|max:20',
            'position'     => 'required|string|max:255',
            'experience'   => 'required|string',
            'skills'       => 'nullable|string',
            'cover_letter' => 'nullable|string',
            'resume'       => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
        ]);

        if ($request->hasFile('resume')) {
            $resume     = $request->file('resume');
            $resumePath = $resume->store('resumes', 'public');

            $application = JobApplication::create([
                'full_name'    => $request->full_name,
                'email'        => $request->email,
                'phone'        => $request->phone,
                'position'     => $request->position,
                'experience'   => $request->experience,
                'skills'       => $request->skills,
                'cover_letter' => $request->cover_letter,
                'resume_path'  => $resumePath,
                'status'       => 'pending',
            ]);

            // Send email notification
            Mail::to('abdoulrhman_salah@hotmail.com')->send(new NewJobApplication($application));

            return redirect()->back()->with('success', 'Your application has been submitted successfully!');
        }

        return redirect()->back()->with('error', 'There was an error uploading your resume. Please try again.');
    }

    public function dashboard()
    {
        $applications = JobApplication::latest()->get();
        return view('dashboard.job-applications.index', compact('applications'));
    }

    public function show(JobApplication $application)
    {
        return response()->json($application);
    }

    public function updateStatus(JobApplication $application, Request $request)
    {
        $request->validate([
            'status' => 'required|in:pending,reviewed,interviewed,accepted,rejected',
        ]);

        $application->update(['status' => $request->status]);

        return response()->json(['success' => true]);
    }
}
