<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['user_id', 'thumbnail', 'en_title','ar_title', 'slug', 'sub_title', 'details',  'is_published'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
