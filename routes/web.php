<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//todo Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('todo','\App\Http\Controllers\TodoController');
  Route::post('todo/{id}/update','\App\Http\Controllers\TodoController@update');
  Route::get('todo/{id}/delete','\App\Http\Controllers\TodoController@destroy');
  Route::get('todo/{id}/deleteMsg','\App\Http\Controllers\TodoController@DeleteMsg');
});

//category Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('category','\App\Http\Controllers\CategoryController');
  Route::post('category/{id}/update','\App\Http\Controllers\CategoryController@update');
  Route::get('category/{id}/delete','\App\Http\Controllers\CategoryController@destroy');
  Route::get('category/{id}/deleteMsg','\App\Http\Controllers\CategoryController@DeleteMsg');
});

//post Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('post','\App\Http\Controllers\PostController');
  Route::post('post/{id}/update','\App\Http\Controllers\PostController@update');
  Route::get('post/{id}/delete','\App\Http\Controllers\PostController@destroy');
  Route::get('post/{id}/deleteMsg','\App\Http\Controllers\PostController@DeleteMsg');
});
