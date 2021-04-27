<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use App\Events\QuoteRequested;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use App\Listeners\SendClientConfirmationNotification;
use App\Listeners\SendOwnerConfirmationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        QuoteRequested::class => [
            SendClientConfirmationNotification::class,
            SendOwnerConfirmationNotification::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
