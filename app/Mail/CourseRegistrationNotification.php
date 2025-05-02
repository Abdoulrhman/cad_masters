<?php
namespace App\Mail;

use App\Models\CourseRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseRegistrationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;

    public function __construct(CourseRegistration $registration)
    {
        $this->registration = $registration;
    }

    public function build()
    {
        return $this->subject('New Course Registration - ' . $this->registration->course->title)
            ->view('emails.course-registration');
    }
}
