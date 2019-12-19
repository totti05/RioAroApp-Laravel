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

Route::get('/', 'LandingController@Index')->name('landing');
Route::get('/contact', 'LandingController@Contact');
Route::get('/about', 'LandingController@About');

Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

<<<<<<< HEAD
Route::resource('/person', 'PersonController');
=======
Route::resource('/person', 'PersonController' );
Route::resource('/activity', 'ActivityController');
>>>>>>> activities
