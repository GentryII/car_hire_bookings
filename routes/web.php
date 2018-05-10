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

/*Route::get('/', function () {
    return view('pages.home');
});*/

Route::get('/', 'PagesController@index');
Route::get('/contact-us', 'PagesController@contact');
Route::get('/about-us', 'PagesController@about');
Route::get('/bookings', 'PagesController@bookings');
Route::post('/book', 'BookingsController@book');
Route::post('/sendmessage', 'ContactController@sendMessage');
Route::get('admin', ['middleware' => 'auth', 'uses' => 'DashboardController@dashboard']);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/booking/{id}/', 'BookingsController@getBooking');

