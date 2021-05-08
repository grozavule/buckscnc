<?php

namespace App\Listeners;

use App\Events\QuoteRequested;
use App\Mail\QuoteRequested as QuoteRequestedMailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class SendOwnerConfirmationNotification
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
        Mail::to(env('APP_EMAIL_RECIPIENT'))->send(new QuoteRequestedMailable($event->quote));
    }
}
