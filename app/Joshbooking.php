<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Joshbooking extends Model
{
    // public function customer() {
    //   return $this->belongsTo('App\Customer');
    // }

    protected $events = [
      'created' => Events\NewBooking::class
    ];

    public function package() {
      return $this->belongsTo('App\Package');
    }

    public function user() {
      return $this->belongsTo('App\User');
    }

    public function booker() {
      return $this->belongsTo('App\Bookingdetail', 'bookingdetail_id');
    }

}
