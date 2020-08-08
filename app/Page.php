<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Sluggable;
    protected $guarded = [];

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
