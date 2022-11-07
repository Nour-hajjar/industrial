<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
      protected $fillable = ['user_id', 'en_title', 'ar_title', 'en_details', 'ar_details'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
