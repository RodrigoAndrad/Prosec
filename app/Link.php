<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function elements()
    {
        return $this->belongsToMany('App\Element');
    }
}
