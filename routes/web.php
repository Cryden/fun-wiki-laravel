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


// Main Routes
Route::get('/', function () {
    return view('index');
});

// Auth Routes
Auth::routes();

// OAuth Routes
Route::get('/auth/{provider}', 			'Auth\AuthController@redirectToProvider');
Route::get('/auth/{provider}/callback', 	'Auth\AuthController@handleProviderCallback');

// User routes

Route::get('/user/profile', 				'User\UserController@userProfile')->name('profile');
Route::get('/user/{user_id}', 			'User\UserController@userInfo');

// Dashboard routes
Route::get('/admin', 					'Admin\HomeController@index')->name('home');
Route::get('/admin/users', 					'User\UserController@index');