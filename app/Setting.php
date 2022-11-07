<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   
     protected $fillable = ['user_id', 'name_a','name_e','arrange','link','email'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
