<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    public function components()
    {
        return $this->belongsToMany('App\Component');
    }
    
    public function images()
    {
        return $this->belongsToMany('App\Image');
    }

    public function links()
    {
    	return $this->belongsToMany('App\Link');
    }
    
    public function texts()
    {
    	return $this->belongsToMany('App\Text');
    }
}
