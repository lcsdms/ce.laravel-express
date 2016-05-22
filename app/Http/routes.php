<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
    Route::get('/','PostsController@index');




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    //Prefixo de Rotas de Administração
    Route::group(['prefix' => 'admin'], function (){

        //Rotas de Posts
        Route::group(['prefix' => 'posts'], function(){
            //listagem de posts
            Route::get('',[ 'as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);
            //Rota da página de Criação de Um Post
            Route::get('create',['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);
            //Rota post, para gravação das informações do POST
            Route::post('store',['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);
            //Rota para exibição da página de edição
            Route::get('edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostsAdminController@edit']);
            //Rota post para update das informações
            Route::put('update/{id}',['as' => 'admin.posts.update', 'uses' => 'PostsAdminController@update']);
            //Rota destroy para deletar o registro da base de dados
            Route::get('destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy']);
        });

    });
    
});
