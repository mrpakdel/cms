<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class CategoryGallery extends Model
{
    use Sluggable;
    protected $casts = [
        'images'=>'array'
    ];

    protected $guarded = [];

    public function Gallery(){
        return $this->hasMany(Gallery::class);
    }

    /**
     * @inheritDoc
     */
    public function sluggable(): array
    {
        return [
            'slug'=>[
                'source'=>'title',
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
