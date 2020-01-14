<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class VenueCreated
{
    use Dispatchable, SerializesModels;
    
    public $venue;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($venue)
    {
        $this->venue = $venue;
    }

}
