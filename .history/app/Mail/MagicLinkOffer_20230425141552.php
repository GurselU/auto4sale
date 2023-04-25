<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MagicLinkOffer extends Mailable
{
    use Queueable, SerializesModels;

    public $magicLink = [];
    public $car = [];
    public $pictures = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($magicLink, $car, $pictures)
    {
        $this->magicLink = $magicLink;
        $this->car = $car;
        $this->pictures = $pictures;

        dd($pictures);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function build()
    {
        return $this->from('auto@auto4sale.be')
            ->subject('Nouveau véhicule sur Auto4Sale')
            ->attach('pictures)
            ->view('admin.emails.newCar');
    }
}
