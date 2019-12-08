<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function profiles()
    {
        return $this->belongsToMany('App\Profile');
    }
}
