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

Route::get('/home', 'HomeController@index')->name('home');

// OAuth Routes
Route::get('auth/{provider}', 			'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 	'Auth\AuthController@handleProviderCallback');

// User routes
Route::get('users', 					'User\UserController@index');
Route::get('user/profile', 				'User\UserController@userProfile')->name('profile');
Route::get('user/{user_id}', 			'User\UserController@userInfo');
