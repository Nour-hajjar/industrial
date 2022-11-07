<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
   
     protected $fillable = ['user_id', 'thumbnail', 'en_title','ar_title','en_sub_title','ar_sub_title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
