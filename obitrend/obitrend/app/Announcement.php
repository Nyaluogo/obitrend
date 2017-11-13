<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Announcement extends Model
{

    public function user()
    {
        return $this->hasMany(User::class,'id');
    }
    protected $fillable = [

        'user_id',
        'type_of_announcement',
        'image_thumb',
        'image_path',
        'description',
        'location',
        'file_path',
        'payment',
        'status',
        'country',
        'is_featured',
        'title'
        ];


    public function tribute()
    {
        return $this->hasMany(Tribute::class,'tributes');
    }



}
