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


Route::get('chat','ChatController@chat');
Route::post('send', 'ChatController@send');

Route::get('check', function() {
	return session('chat');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/getOldMessage', 'ChatController@getOldMessage');
Route::post('/deleteSession', 'ChatController@deleteSession');
Route::post('/saveToSession', 'ChatController@saveToSession');
