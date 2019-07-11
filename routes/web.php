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

Route::get('/picture/new','PictureController@index')->name('picture.new');
Route::get('/picture/view','PictureController@view')->name('picture.view');
Route::post('/picture/post','PictureController@post')->name('picture.post');