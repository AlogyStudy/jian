<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


// 文章路由
// 文章列表，添加文章，编辑文章，删除文章，文章详情
Route::get('/list', '\App\Http/Constructors/article@index');
Route::get('/list/{listId}', '\App\Http/Constructors/article@show');

Route::get('/article/create', '\App\Http/Constructors/article@create');
Route::post('/list', '\App\Http/Constructors/article@store');

Route::get('/list/{listId}/edit', '\App\Http/Constructors/article@edit');
Route::put('/list/{listId}', '\App\Http/Constructors/article@update');

Route::get('/list/delete', '\App\Http/Constructors/article@delete');
