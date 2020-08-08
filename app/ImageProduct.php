<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
