<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VenueCreated extends Mailable
{
    use Queueable, SerializesModels;
        
    public $venue;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($venue)
    {
        $this->venue = $venue;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.venue-created');
    }
}
