<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/ping','PingController@index');
Route::get('/ping/select','PingController@getPing');
Route::get('/ping/store','PingController@postPing');
Route::get('/ping/update','PingController@updatePing');
Route::get('/ping/delete','PingController@deletePing');

Route::get('/gift','GiftsController@index');
Route::get('/gift/select','GiftsController@getGift');
Route::get('/gift/store','GiftsController@storeGift');
Route::get('/gift/update','GiftsController@updateGift');
Route::get('/gift/delete','GiftsController@deleteGift');

Route::get('/giftsend','GiftsendController@giftSend');
Route::get('/giftsend/list','GiftsendController@giftSendDetails');

Route::get('/user','UserController@index');
Route::get('/user/select','UserController@getUser');
Route::get('/user/store','UserController@store');
// Route::get('/user/update','UserController@updateGift');
// Route::get('/user/delete','UserController@deleteGift');
