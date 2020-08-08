<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;

    protected  $casts = [
        'images' => 'array',
    ];
    protected $guarded = [];

/**
 * @inheritDoc
  */public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>[
                'source'=>'title',
            ]
        ];
    }

    public function articles(){
      return $this->belongsToMany(Article::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function content(){
      return $this->hasMany(Content::class);
    }
}
