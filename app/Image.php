<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function links()
    {
    	return $this->hasMany('App\Link');
    }
    
    public function elements()
    {
        return $this->belongsToMany('App\Element');
    }
}
