<?php

namespace App\Providers;

use App\Events\OrderPaymentUpdateEvent;
use App\Listeners\OrderPaymentUpdateListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        OrderPaymentUpdateEvent::class => [
            OrderPaymentUpdateListener::class,
        ],
        // OrderPlacedNotificationEvent::class => [
        //     OrderPlacedNotificationListener::class,
        // ],
        // RTOrderPlacedNotificationEvent::class => [
        //     RTOrderPlacedNotificationListener::class,
        // ]
    ];
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
