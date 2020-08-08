<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    Use Sluggable;
    protected $guarded=[];
    protected $casts = [
        'images'=>'array',
    ];
    /**
    * @inheritDoc
    */
    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>[
                'source'=>'title'
            ]
        ];
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function category(){
     return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
