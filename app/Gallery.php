<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];


    public function categoryGallery(){
        return $this->hasMany(CategoryGallery::class);
    }

    public function likes(){
        return $this->belongsToMany(Like::class);
    }

}
