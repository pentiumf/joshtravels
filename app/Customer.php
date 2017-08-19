<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
      'user_id', 'name', 'contact_number', 'postal-address','country_id',
      'passport_info', 'kids_num', 'adults_num', 'accomodation_choice', 'email'
    ];

    public function country() {
      return $this->belongsTo('App\Country');
    }

    public function user() {
      return $this->belongsTo('App\User');
    }
}
