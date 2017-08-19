<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packageimage extends Model
{
  protected $fillable = [
      'package_id','path'
  ];
}
