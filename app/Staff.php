<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
  protected $fillable = [
      'name','position','profession','date_of_birth','years','membership', 'task', 'qualifications',
      'education','emp_record','languages','certification','nationality','photo'
  ];
}
