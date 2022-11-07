<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directive extends Model
{
     protected $fillable = ['user_id', 'name', 'name_a','slug','location','location_a', 'fax','mobile','manager','manager_a'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'directive_services');
    }
}
