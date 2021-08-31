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


Route::get('mypage/profile/create', 'Mypage\ProfileController@add');
Route::get('mypage/profile/edit', 'Mypage\ProfileController@edit');

Route::get('mypage/article/create', 'Mypage\ArticleController@add');
Route::get('mypage/article/edit', 'Mypage\ArticleController@edit');