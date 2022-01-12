<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PostController@index');

//Route::resource('/','PostController');

/*Route::get('email', function()
{
    dd(Config::get('mail'));
});*/

Route::get('/email','mailController@send');

Route::post('/','PostController@index');

Route::get('/create','PostController@create');
Route::post('/create','PostController@store')->name('post.store');

Route::get('/show/{id}','PostController@show')->name('show');
Route::get('/edit/{id}','PostController@edit');
Route::post('/update/{id}','PostController@update');
Route::get('/delete/{id}','PostController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
