<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','imageUrl','admin','editor','token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles(){
        return $this->hasMany('App\Article');
    }

    public function discussions(){
        return $this->hasMany('App\Discussion');
    }

    public function scopeAdmin($query){
            return $query->where('admin',true);
    }

    public function scopeEditor($query){
            return $query->where('editor',true)->where('admin',false);
    }

    public function scopeUser($query){
            return $query->where('editor',false)->where('admin',false);
    }
}
