<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [];

    protected $casts = [
        'image'=>'array'
    ];


}
