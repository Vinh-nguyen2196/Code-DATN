<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table="users";
    public function Product(){
        return $this->hasMany('App\product','id_user','id');
    }
    public function Comment(){
        return $this->hasMany('App\Comments','id_user_comment','id');
    }
    public function Notify(){
        return $this->hasMany('App\Notify','id_user_receive','id');
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'email', 'password', 'phone', 'level', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
