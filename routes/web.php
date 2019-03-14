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


$router->group(['middleware' => 'auth'], function() {
    // lots of routes that require auth middleware
    Route::get('/home', 'HomeController@index')->name('home'); 
    Route::get('/statics', 'HomeController@statics')->name('statics'); 
    Route::get('/getDataByHour', 'HomeController@getDataByHour')->name('getDataByHour'); 
	Route::Resource('ticket', 'TicketController');
});

