<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
 protected $fillable = ['user_id', 'title','title_a', 'slug','location','location_a','mobile' ,'fax','manager','manager_a'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function directives()
    {
        return $this->belongsToMany(Directive::class, 'directive_services');
    }
}
