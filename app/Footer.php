<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
  protected  $fillable = ['user_id', 'tel','email','fax','mailbox','en_location','ar_location','en_details','ar_details','map','home_map'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
