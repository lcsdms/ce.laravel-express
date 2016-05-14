<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected  $fillable = [
        'name'
    ];

    function posts(){
        return $this->belongsToMany('App\Post','posts_tags');
    }
}
