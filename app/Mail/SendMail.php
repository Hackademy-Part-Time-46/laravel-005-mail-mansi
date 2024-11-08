<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Email inviata da laravel 005',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'email_bella',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
