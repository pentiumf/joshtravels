<?php

namespace App\Listeners;

use App\Events\NewBooking;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\BookingMade;

class SendBookingNotification
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
     * @param  NewBooking  $event
     * @return void
     */
    public function handle(NewBooking $event)
    {
      $receiverAddress = 'swaggarnick@gmail.com';
      Mail::to($receiverAddress)
      ->send(new BookingMade);
    }
}
