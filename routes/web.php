<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@index');

Route::get('/articles/', [
    'as' => 'articles.index',
    'uses' => 'ArticlesController@index'
]);

Route::get('/articles/create',[
    'as' => 'articles.create',
    'uses' => 'ArticlesController@create'
]);

Route::get('/articles/edit/{id}',[
    'as' => 'articles.edit',
    'uses' => 'ArticlesController@edit'
]);

Route::post('/articles',[
    'as' => 'articles.store',
    'uses' => 'ArticlesController@store'
]);

Route::delete('/articles/{id}',[
    'as' => 'articles.destroy',
    'uses' => 'ArticlesController@destroy'
]);

Route::put('/articles/{id}',[
    'as' => 'articles.update',
    'uses' => 'ArticlesController@update'
]);

Route::get('/articles/{id}', [
    'as' => 'articles.show',
    'uses' => 'ArticlesController@show'
]);



Route::get('/hello', 'HelloController@index');