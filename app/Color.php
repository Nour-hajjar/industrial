<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
      protected $fillable = ['user_id', 'color1', 'color2','color3','color4','color5','color6','color7','color8','color9','color10','color11','color12','color13','color14','color15','color16','color17','color18','color19','color20','color21','color22','color23','color24','color25','color26'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
