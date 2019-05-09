<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactFormMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The data submitted with the form.
     *
     * @var array
     */
    public $formData = [];

    /**
     * Create a new message instance.
     *
     * @param. array  $formData
     * @return void
     */
    public function __construct(array $formData = [])
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact Form Message')
            ->to(config('mail.admin.address'), config('mail.admin.name'))
            ->from($this->formData['email'], $this->formData['name'])
            ->replyTo($this->formData['email'], $this->formData['name'])
            ->markdown('emails.contact-form-message');
    }
}
