<?php

use App\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'admin'],function(){

Route::resource('category','CategoryController');
Route::resource('posts','PostController');

});

Route::group(['middleware'=>'auth'],function(){
Route::resource('posts/create','PostController');
});

Route::get('/', function () {
    $cars = Post::where('approved',1)->latest();
    return view('welcome',compact('cars'));
});

Auth::routes();
