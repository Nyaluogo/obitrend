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
        'name',
        'email',
        'password',
        'gender',
        'first_name',
        'other_names',
        'access_level',
        'slug',
        'avatar',
        'account_status',
        'phone_number',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /* relationships*/

      public function profile()
    {
      return $this->hasOne('Black_Magik\Profile');
    }

      public function announcement()
    {
        return $this->hasMany('Black_Magik\Announcement');
    }
}
