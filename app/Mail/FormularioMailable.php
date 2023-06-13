<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormularioMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $nombreRazonSocial;
    public $dniRuc;
    public $telefono;
    public $correoElectronico;
    public $mensaje;

    public function __construct($nombreRazonSocial, $dniRuc, $telefono, $correoElectronico, $mensaje)
    {
        $this->nombreRazonSocial = $nombreRazonSocial;
        $this->dniRuc = $dniRuc;
        $this->telefono = $telefono;
        $this->correoElectronico = $correoElectronico;
        $this->mensaje = $mensaje;
    }

    public function build()
    {
        return $this->view('emails.formulario')->subject('Nueva solicitud de contacto');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Formulario WEB',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.formulario',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
