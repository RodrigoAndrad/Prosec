<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SEOTag extends Model
{
    public function pages()
    {
    	return $this->belongsTo('App\Page');
    }
}
