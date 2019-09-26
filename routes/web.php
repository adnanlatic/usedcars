<?php

use App\Post;
use App\Category;
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
Route::get('posts/create','PostController@create');
Route::post('posts','PostController@store');
});

Route::get('/', function () {
    $cars = Post::where('approved',1)->latest()->paginate(6);
    $categories = Category::latest()->get();
    return view('welcome',compact('cars','categories'));
});

Auth::routes();
