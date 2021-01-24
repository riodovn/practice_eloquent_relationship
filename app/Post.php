<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'content',	'user_id',
    ];   
    // Make relationship with User
    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }
    // Post has many comments relationship 
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
