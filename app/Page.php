<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

    public function seoTags() {
        return $this->hasMany('App\SEOTag');
    }

    public function components() {
        return $this->belongsToMany('App\Component');
    }

    public function elements() {
        return $this->hasManyThrough('App\Element', 'App\Component');
    }

    public function status() {
        return $this->belongsToMany('App\Status');
    }

    public function buildPageComponents() {
        foreach ($this->components as $component) {
            foreach ($component->elements as $element) {
                foreach ($element->images as $image) {
                    if (empty($image->src)) {
                        $image->src = 'images/default/missing.jpg';
                    } else if (file_exists($image->src)) {
                        
                    } else {
                        if($this->slug !== '/')
                        {
                            $slug = preg_replace('/\\.[^.\\s]{3,4}$/','',$this->slug);
                        } else {
                            $slug = '';
                        }
                        if (file_exists('images/'. basename($image->src))) {
                            $image->src = 'images/' . basename($image->src);
                        } 
/*
                        if(file_exists('images/' . $slug . basename($image->src))) {
                            $image->src = 'images/' . $slug . basename($image->src);
                        } 
                        else if(file_exists('images/' . $slug .'/'. basename($image->src))) {
                            $image->src = 'images/' . $slug . '/' . basename($image->src);
                        }
                         else if (file_exists('images/'. $image->src)) {
                            $image->src = 'images/' . basename($image->src);
                        } else if(file_exists('images/' . $slug .'/default/'. basename($image->src))) {
                            $image->src = 'images/' . $slug . '/default/' . basename($image->src);
                        } else if (file_exists('images/'. basename($image->src))) {
                            $image->src = 'images/' . basename($image->src);
                        } else if(file_exists('images/default/' . $slug .'/'. basename($image->src))) {
                            $image->src = 'images/default/' . $slug .'/'. basename($image->src);
                        } else if(file_exists('images/default/' . basename($image->src))) {
                            $image->src = 'images/default/' . basename($image->src);
                        } else {
                            $image->src = 'images/default/missing.jpg';
                        }
*/                        
                    }
                }
            }
        }
        return $this->components;
    }

}
