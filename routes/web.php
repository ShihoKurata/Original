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
Route::post('mypage/profile/create', 'Mypage\ProfileController@create')->middleware('auth'); 
Route::get('mypage/profile/edit', 'Mypage\ProfileController@edit')->middleware('auth');
Route::post('mypage/profile/edit', 'Mypage\ProfileController@update')->middleware('auth');

Route::get('mypage/article/create', 'Mypage\ArticleController@add')->middleware('auth');
Route::post('mypage/article/create', 'Mypage\ArticleController@create')->middleware('auth'); 
Route::get('mypage/article/edit', 'Mypage\ArticleController@edit')->middleware('auth');

Route::get('/', 'ToppageController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
