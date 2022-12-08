<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CorreoPedido extends Mailable
{
    use Queueable, SerializesModels;

    public $subjectCorreo = "Informacion de Pedido - Weirdo Comics ";
    public $datosPedido;
    public $datosIndividuales;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datosPedido, $ventaIndInfo)
    {
        $this->datosPedido = $datosPedido;
        $this->datosIndividuales = $ventaIndInfo;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function build()
    {
        return $this->view('correos/correo_pedido')->subject($this->subjectCorreo);
    }

}
