<?php

namespace App\Listeners;

use App\Events\CustomerRegistration;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailVerificationCode
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
     * @param  CustomerRegistration  $event
     * @return void
     */
    public function handle(CustomerRegistration $event)
    {
        //
    }
}
