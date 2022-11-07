<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = ['user_id', 'name', 'Departments','Country','email','first_time','City','phone','Subject','message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
