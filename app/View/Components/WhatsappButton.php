<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhatsappButton extends Component
{
    public $phoneNumber;
    public $message;

    public function __construct($phoneNumber = null, $message = null)
    {
        $this->phoneNumber = $phoneNumber ?? config('whatsapp.number', '1234567890');
        $this->message = $message ?? config('whatsapp.default_message', 'Hello, I have a question about...');
    }

    public function render()
    {
        return view('components.whatsapp-button');
    }
}