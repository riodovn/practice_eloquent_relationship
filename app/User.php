<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
       'name','age','email','password','birthday','status'
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
    // Make relationship User can make many posts
    public function posts(){
        return $this->hasMany('App\Comment');
    }
    // User via Post make many comments relationship
    public function comments(){
        // User - > Post - > Comment
        // 3rd parameter is a foreignkey of Mid Table 
        // 4th parameter is a foreignkey of Last Table 
        // 5th parameter is a local primary key
        return $this->hasManyThrough('App\Comment','App\Post','user_id','post_id','id');
    }
    // User has One Profile
    public function profile(){
        return $this->hasOne('App\Profile','user_id','id');
    }
}
