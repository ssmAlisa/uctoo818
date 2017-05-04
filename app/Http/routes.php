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

Route::get('/', function () {
    return view('welcome');
});
Route::get('test',function(){
    return 'test';
});

Route::post('test_post',function(){
    return view('welcome');
});
//多请求路由
Route::match(['get','post'],'test_match',function(){
    return 'test_match';
});
Route::any('test_any',function(){
    return 'test_any';
});
//路由参数
Route::get('user/{id}',function($id){
    return 'user-' . $id;
});

Route::get('user/{name?}',function($name='alisa'){
    return 'user-' . $name;
});

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
    //
});
