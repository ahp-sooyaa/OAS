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

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/universities', 'UniversityController@index');
Route::get('/applieduniversity', 'UniversityController@applied');
Route::get('/merit', 'MeritController@index');
Route::get('/notification', 'NotificationController@index');
Route::get('/transction', 'PaymentController@index');
