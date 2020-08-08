<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;
    protected $fillable = [
        'user_id',
        'is_virtual',
        'lang',
        'name',
        'slug',
        'code',
        'ean_code',
        'upc_code',
        'status',
        'available_for_order',
        'show_price',
        'show_only',
        'product_status',
        'tags',
        'body',
        'description',
        'price',
        'wholesale_price',
        'quantity',
        'supplier_id',
        'manufacturer_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category_products(){
        return $this->belongsToMany(CategoryProduct::class);
    }


    /**
     * @inheritDoc
     */
    public function sluggable(): array
    {
        return [
            'slug'=>[
                'source'=>'name',
            ]
        ];
    }

    public function images(){
        return $this->hasMany(ImageProduct::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }
}
