<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Выполняем связь. Где живет пользователь
    public function country(){
        return $this->hasOne("App\Country");
    }

    public function articles()
    {
        return $this->hasMany("App\Article");
    }

    public function roles()
    {
       return $this->belongsToMany('App\Role');
    }

}
