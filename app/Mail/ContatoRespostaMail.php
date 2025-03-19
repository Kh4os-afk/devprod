<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Headers;
use Illuminate\Queue\SerializesModels;

class ContatoRespostaMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(private string $name)
    {
    }

    public function headers(): Headers
    {
        return new Headers(
            text: [
                "X-MT-Category" => "Devprod Solutions Resposta",
            ],
        );
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('comercial@devprod.com.br', 'Devprod Solutions'),
            subject: "Recebemos sua mensagem",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contato-resposta',
            with: ['name' => $this->name],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
