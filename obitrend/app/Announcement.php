<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Announcement extends Model
{
      public $with = ['user','tribute',];
    protected $fillable = [
        'content',
        'user_id',
        'type_of_announcement',
        'image_thumb',
        'image_path',
        'description',
        'location',
        'file_path',
        'payment',
        'is_featured',
        'title'
        ];

    public function user()
    {
        return $this->belongsto('Black_Magik\User');
    }

    public function tribute()
    {
        return $this->hasMany('Black_Magik\Tribute');
    }

   

}
