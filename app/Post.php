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

    //Relação dos models, indicando que um post pode ter varios comentários
    public function comments(){
        return $this->hasMany('App\Comments');
    }
}
