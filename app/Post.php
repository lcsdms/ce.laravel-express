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
    
    public function tags(){
        return $this->belongsToMany('App\Tag','posts_tags');
    }


    /**
     * Traz os nomes das tags relacionadas ao post separadas por virgula e espaço
     * @return string - Tags do post separados por virgula e espaço
     */
    //as palavras get e Attribute são obrigatorias
    public function getTagListAttribute(){
        $tags = $this->tags()->lists('name')->all();
        return implode(', ', $tags);
    }
}
