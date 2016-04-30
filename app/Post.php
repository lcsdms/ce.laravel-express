<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //o fillable permite que este model possa usar a função de MassAssignment
    protected $fillable = [
        'title',
        'content'
        ];
}
