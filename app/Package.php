<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
  protected $fillable = [
      'name', 'price', 'destination', 'overview', 'description',
      'duration', 'depature_date', 'end_date', 'photo', 'package_category_id',
  ];


  public function photos() {
    return $this->hasMany('App\Packageimage');
  }

  public function category() {
    return $this->belongsTo('App\PackageCategory', 'package_category_id');
  }



}
