<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookingdetail extends Model
{
    protected $fillable = [
      'user_id', 'name', 'email', 'contact_number', 'postal_address','country_id',
      'passport_info'
    ];

    public function user() {
      return $this->belongsTo('App\User');
    }

    public function country() {
      return $this->belongsTo('App\Country');
    }




}
