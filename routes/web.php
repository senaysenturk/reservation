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

Route::get('/','ReservationController@index')->name('reservations.index');
Route::get('/create','ReservationController@create')->name('reservations.create');
Route::post('/create','ReservationController@store')->name('reservations.store');
Route::get('/delete/{reservation}','ReservationController@delete')->name('reservations.delete');
Route::post('/delete/{reservation}','ReservationController@destroy')->name('reservations.destroy');
Route::post('/{reservation}', 'ReservationController@update')->name('reservations.update');
Route::get('/{reservation}', 'ReservationController@show')->name('reservations.show');