<?php

namespace App;

use bar\baz\source_with_namespace;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class CategoryFile extends Model
{
    use Sluggable;
    protected $guarded = [];


    /**
     * @inheritDoc
     */
    public function sluggable(): array
    {
        return [
            'slug'=> [
                'source'=>'title',
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function files(){
        return $this->hasMany(File::class);
    }
}
