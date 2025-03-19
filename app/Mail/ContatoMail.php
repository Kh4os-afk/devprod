<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Headers;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(private string $email, private string $name, private string $text)
    {
    }

    public function headers(): Headers
    {
        return new Headers(
            text: [
                "X-MT-Category" => "Devprod Solutions Contato",
            ],
        );
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('comercial@devprod.com.br', 'Devprod Solutions'),
            subject: "Devprod Solutions Contato",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contato',
            with: ['email' => $this->email, 'name' => $this->name, 'text' => $this->text],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
