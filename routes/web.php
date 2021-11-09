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



Route::get('mypage/profile/create', 'Mypage\ProfileController@add')->middleware('auth');
Route::post('mypage/profile/create', 'Mypage\ProfileController@create')->middleware('auth')->name('profile.create'); 
//Route::get('log/index', 'Mypage\LogController@index')->middleware('auth'); 
Route::get('mypage/profile/edit', 'Mypage\ProfileController@edit')->middleware('auth')->name('profile.edit'); 
Route::post('mypage/profile/edit', 'Mypage\ProfileController@update')->middleware('auth');
Route::get('mypage/profile/delete', 'Mypage\ProfileController@delete')->middleware('auth');
Route::get('mypage/profile/index', 'Mypage\ProfileController@index')->middleware('auth');

Route::get('mypage/log/create', 'Mypage\LogController@add')->middleware('auth')->name('log.create');
Route::post('mypage/log/create', 'Mypage\LogController@create')->middleware('auth'); 
Route::get('mypage/log/edit', 'Mypage\LogController@edit')->middleware('auth');
Route::post('mypage/log/edit', 'Mypage\LogController@update')->middleware('auth');
Route::get('mypage/log/delete', 'Mypage\LogController@delete')->middleware('auth');
Route::get('mypage/log/index', 'Mypage\LogController@index')->middleware('auth')->name('log.index'); 
Route::get('mypage/log/show', 'Mypage\LogController@show')->name('log.show');

Route::get('mypage/favorite/index', 'Mypage\FavoriteController@index')->middleware('auth'); 
Route::get('mypage/favorite/show', 'Mypage\FavoriteController@show')->middleware('auth');




Route::get('/', 'ToppageController@index');
Route::get('/show/{id}', 'ToppageController@show')->name('show');

Route::get('/welcome', 'WelcomeController@index')->name('welcome');
Route::get('/mypage', 'Mypage\FrontController@index')->middleware('auth')->name('mypage');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
