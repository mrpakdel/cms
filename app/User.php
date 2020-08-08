<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,HaseRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level','family','mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function article()
    {
        return $this->hasMany(Article::class);
    }

    public function Contents()
    {
        return $this->hasMany(Content::class);
    }

    public function course()
    {
        return $this->hasMany(Course::class);
    }



    public function isAdmin()
    {
        return $this->level == 'Admin' ? true : false;
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}