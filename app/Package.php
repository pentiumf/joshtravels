<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
  protected $fillable = [
      'name', 'price', 'destination', 'overview', 'description',
      'duration', 'depature_date', 'end_date', 'photo'
  ];


  public function photos() {
    return $this->hasMany('App\Packageimage');
  }



}
