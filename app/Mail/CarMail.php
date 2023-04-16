<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CarMail extends Mailable
{
    use Queueable, SerializesModels;

    public $car = [];
    public $pictures = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($car, $pictures)
    {
        $this->car = $car;
        $this->pictures = $pictures;

    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function build()
    {
        return $this->from('gurselunlu@gmail.com')
                    ->subject('New car from sellauto')
                    ->view('admin.emails.newCar');
    }

}
