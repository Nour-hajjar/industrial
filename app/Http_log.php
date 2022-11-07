<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Http_log extends Model
{
       protected $fillable = ['user_id', 'ip','browser','date','route'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
