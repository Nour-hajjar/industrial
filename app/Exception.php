<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exception extends Model
{
       protected $fillable = ['user_id', 'type','message','route','file','line'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
