<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = [];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
