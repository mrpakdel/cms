<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];

    public function categoryFile(){
        return $this->hasMany(CategoryFile::class);
    }
}
