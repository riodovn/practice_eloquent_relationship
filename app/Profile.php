<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'address',	'tel',	'user_id',	'province',
    ];

    // Make relationship with User
    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }
}
