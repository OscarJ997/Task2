<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Mailsender extends Mailable
{
    use Queueable, SerializesModels;

    public $productData;

    public function __construct($mensaje)
    {
        $this->productData = $mensaje;
    }

    public function build()
    {
        return $this->view('emails.correo')
                    ->subject('Product Modification Notification');
    }
}