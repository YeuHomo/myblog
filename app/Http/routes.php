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

Route::get('/', function () {
    //页面访问/时重定向到index
    return redirect('/blog');
});


Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showArticle');


//中间件拦截
Route::group(['middleware'=>'admin.login'],function (){

    //博文添加
    Route::get('/admin/addArt', 'ArticleController@addArt');

});