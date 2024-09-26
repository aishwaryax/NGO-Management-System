<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Controllers\Controller;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //'name', 'email', 'password','role_id',
        'name', 'email', 'password','role',

    ];

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';
    /*public function isAdmin()    {        
        return $this->type === self::ADMIN_TYPE;    
    }*/

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

    public function donations(){
        return $this->hasMany('App\Donor');
    }

    public function issues(){
        return $this->hasMany('App\Book');
    }
}
