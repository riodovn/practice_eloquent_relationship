<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',	'post_id',
    ];   
    // Make relationship with Post
    public function post(){
        return $this->hasOne('App\Post','id','post_id');
    }
}
