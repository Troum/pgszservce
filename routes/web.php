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
Route::get('/add-video', 'HomeController@video')->name('add-video');
Route::get('/generate', 'HomeController@codes')->name('generate');
Route::get('/send', 'HomeController@send')->name('send');

Route::post('/upload-video', 'AdminController@uploadVideo');
Route::post('/generate-codes', 'AdminController@generateCodes');
Route::post('/send-code', 'AdminController@sendCode');


Route::get('/get-registered', 'DataTablesController@getRegistered');
Route::get('/get-codes', 'DataTablesController@getCodes');
Route::get('/videos', function() {
   return abort(403, 'Переход запрещен');
});
