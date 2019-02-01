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

Route::get('/home/slider', 'SliderController@index');
Route::get('/home/slider/create', 'SliderController@create');
Route::post('/home/slider/store', 'SliderController@store');
Route::get('/home/slider/{slider}/edit', 'SliderController@edit');
Route::post('/home/slider/{slider}/change', 'SliderController@change');
Route::get('/home/slider/{slider}/delete', 'SliderController@delete');

Route::get('/home/contact', 'ContactController@edit');
Route::post('/home/contact/change', 'ContactController@change');
