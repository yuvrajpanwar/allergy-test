<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConsultationFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('default@example.com', $this->data['name22']) // Use a default email with dynamic name
            ->subject('New Consultation Request: ' . $this->data['name22']) // Subject with the sender's name
            ->view('emails.consultationForm')
            ->with('data', $this->data);
    }
    
    
    
}
