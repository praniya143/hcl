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
Route::get('/', 'HotelDetailController@search');
Route::get('/login', 'UserAuthController@login');
Route::post('/login', 'UserAuthController@auth');
Route::get('/logout', function(){
	session_start();
	session_destroy();
	return redirect('/');
});

Route::get('/hotel-search', 'HotelDetailController@search');
Route::post('/get-hotel-details', 'HotelDetailController@getHotelDetails');
Route::post('/get-location-details', 'HotelDetailController@getLocationDetails');


Route::get('booking/{id}', 'BookingController@index');


Route::post('bookingstore', 'BookingController@bookingstore');
