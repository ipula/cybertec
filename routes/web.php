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

//Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@addCv')->name('cv');
Route::get('/home', 'HomeController@getCv')->name('getcv');
Route::get('/view/{id}', 'HomeController@viewCv')->name('viewcv');

