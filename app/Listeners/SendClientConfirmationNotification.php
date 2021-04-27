<?php

namespace App\Listeners;

use App\Events\QuoteRequested;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendClientConfirmationNotification
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
     * @param  QuoteRequested  $event
     * @return void
     */
    public function handle(QuoteRequested $event)
    {
        //
    }
}
