<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    public function pages()
    {
        return $this->belongsToMany('App\Page');
    }
    
    public function elements()
    {
        return $this->belongsToMany('App\Element');
    }
}
