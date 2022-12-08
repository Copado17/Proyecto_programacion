<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CorreoVenta extends Mailable
{
    use Queueable, SerializesModels;

    public $subjectCorreo = "Informacion de Venta - Weirdo Comics ";
    public $datos;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ventaInfo)
    {
        $this->datos = $ventaInfo;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function build()
    {
        return $this->view('correos/correo_venta');
    }

}
