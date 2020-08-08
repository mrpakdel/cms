<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use Sluggable;
    protected $guarded = [];
    public function products(){
        return $this->belongsToMany(Product::class);
    }


    public function children()
    {
        return $this->hasMany($this, 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo($this, 'parent_id');
    }
    /**
     * @inheritDoc
     */public function sluggable(): array
    {
        return [
            'slug'=>[
                'source'=>'name',
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
