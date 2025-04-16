<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $mail = $this->subject('New Contact Form Submission - ' . ucfirst($this->data['recipient_type']))
            ->view('emails.contact-form');

        if (! empty($this->data['file_path'])) {
            $mail->attach(storage_path('app/public/' . $this->data['file_path']));
        }

        return $mail;
    }
}
