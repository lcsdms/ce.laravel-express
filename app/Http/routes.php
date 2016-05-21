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

    //Rotas nomeadas para facilitar o uso da aplicação

    //Rota da página inicial da administração
    Route::get('admin/posts',[ 'as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);

    //Rota da página de Criação de Um Post
    Route::get('admin/posts/create',['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);

    //Rota post, para gravação das informações do POST
    Route::post('admin/posts/store',['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);


    
});
