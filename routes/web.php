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
Route::get('/universities/{uni_id}', 'UniversityController@showapplication');
Route::get('/applieduniversity', 'AdmissionController@applied');

Route::get('/merit', 'MeritController@index');
Route::get('/notification', 'NotificationController@index');
Route::get('/transction', 'PaymentController@index');

Route::get('/search', 'UniversityController@search');

Route::post('/profile', 'ProfileController@save');
Route::post('/applieduniversity', 'UniversityController@save');

//Admin route

Route::prefix('admin')->group(function(){
  Route::get('/login', 'Auth\AdminLoginController@showloginform')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
  Route::post('/dashboard', 'AdminController@approveadmission');
  Route::get('/adminmerit', 'AdminController@merit');
  Route::post('/adminmerit', 'AdminController@save');
});
