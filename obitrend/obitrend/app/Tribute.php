<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tribute extends Model
{
      // public $with = ['user'];

    protected $fillable = ['user_id','announcement_id','comment'];

    // public function announcement()
    // {
    //     return $this->belongsTo('Black_Magik\Announcement');
    // }

    // public function user()
    // {
    //     return $this->belongsTo('Black_Magik\User');
    // }
}
