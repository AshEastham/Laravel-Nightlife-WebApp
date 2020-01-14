<?php

namespace App\Listeners;

use App\Events\VenueCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendVenueCreatedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  VenueCreated  $event
     * @return void
     */
    public function handle(VenueCreated $event)
    {
        //
    }
}
