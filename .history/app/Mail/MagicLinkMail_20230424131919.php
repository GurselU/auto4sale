<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MagicLinkMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public $magicLink = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($magicLink)
    {
        $this->magicLink = $magicLink;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function build()
    {
        return $this->from('auto@auto4')
                    ->subject('Magic Link')
                    ->view('admin.emails.login');
    }
}
