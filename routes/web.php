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
Route::get('login', 'UserAuthController@login');
Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');


Route::get('booking/{id}', 'BookingController@index');


Route::post('bookingstore', 'BookingController@bookingstore');