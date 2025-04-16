<?php
namespace App\Http\Controllers;

use App\Mail\ContactFormSubmission;
use App\Models\ContactSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $settings = ContactSettings::first();
        return view('contact', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'sales_email'     => 'nullable|email|max:255',
            'support_email'   => 'nullable|email|max:255',
            'webmaster_email' => 'nullable|email|max:255',
        ]);

        $settings = ContactSettings::first();
        if (! $settings) {
            $settings = new ContactSettings();
        }

        $settings->fill($request->only([
            'sales_email',
            'support_email',
            'webmaster_email',
        ]));
        $settings->save();

        return back()->with('success', 'Contact settings updated successfully.');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'recipient'  => 'required|in:sales,support,webmaster',
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'required|string|max:20',
            'message'    => 'required|string',
            'file'       => 'nullable|file|max:10240', // 10MB max
        ]);

        // Handle file upload if present
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('contact-uploads', 'public');
        }

        // Determine recipient email based on selection
        $recipientEmail = match ($request->recipient) {
            'sales' => 'sales@cadmasters.com',
            'support' => 'support@cadmasters.com',
            'webmaster' => 'webmaster@cadmasters.com',
            default => 'info@cadmasters.com',
        };

        // Send email
        Mail::to($recipientEmail)->send(new ContactFormSubmission([
            'recipient_type' => $request->recipient,
            'first_name'     => $request->first_name,
            'last_name'      => $request->last_name,
            'email'          => $request->email,
            'phone'          => $request->phone,
            'message'        => $request->message,
            'file_path'      => $filePath,
        ]));

        return back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
