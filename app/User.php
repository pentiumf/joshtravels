<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'is_active'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role() {
        return $this->belongsTo('App\Role');
    }


    public function customerinfo() {
      return$this->hasMany('App\Customer');

    }

    public function joshbookings() {
        return $this->hasMany('App\Joshbooking');
    }

    public function bookingdetail() {
      return $this->hasOne('App\Bookingdetail');
    }

    public function packages() {
      return $this->hasManyThrough('App\Joshbooking', 'App\Package');
    }

    public function isAdmin() {
        if ($this->role_id != NUll) {
          if ($this->role->name == "Admin" && $this->is_active == 1 ) {
              return true;
          }
        }

        return false;
    }

    public function isEmployee() {
        if ($this->role_id != NUll) {
          if ($this->role->name == "Employee" && $this->is_active == 1 ) {
              return true;
          }
          elseif ($this->role->name == "Admin" && $this->is_active == 1 ) {
              return true;
          }
        }


        return false;
    }




}
