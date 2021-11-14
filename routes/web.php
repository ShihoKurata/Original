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

Route::group(['prefix' => 'mypage','middleware'=>'auth'], function() {
  Route::get('profile/create', 'Mypage\ProfileController@add');
  Route::post('profile/create', 'Mypage\ProfileController@create')->name('profile.create'); 
  //Route::get('log/index', 'Mypage\LogController@index')->middleware('auth'); 
  Route::get('profile/edit', 'Mypage\ProfileController@edit')->name('profile.edit'); 
  Route::post('profile/edit', 'Mypage\ProfileController@update');
  Route::get('profile/delete', 'Mypage\ProfileController@delete');
  Route::get('profile/index', 'Mypage\ProfileController@index');
  Route::get('log/create', 'Mypage\LogController@add')->name('log.create');
  Route::post('log/create', 'Mypage\LogController@create'); 
  Route::get('log/edit', 'Mypage\LogController@edit');
  Route::post('log/edit', 'Mypage\LogController@update');
  Route::get('log/delete', 'Mypage\LogController@delete');
  Route::get('log/index', 'Mypage\LogController@index')->name('log.index'); 
  Route::get('log/show', 'Mypage\LogController@show')->name('log.show');
  Route::get('favorite/index', 'Mypage\FavoriteController@index'); 
  Route::get('favorite/show', 'Mypage\FavoriteController@show');
  
});

Route::get('/', 'ToppageController@index');
Route::get('/show/{id}', 'ToppageController@show')->name('show');
Route::get('/welcome', 'WelcomeController@index')->name('welcome');
Route::get('/mypage', 'Mypage\FrontController@index')->middleware('auth')->name('mypage');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
