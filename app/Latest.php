<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Latest extends Model
{
      protected $fillable = ['user_id','title','title_a'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
