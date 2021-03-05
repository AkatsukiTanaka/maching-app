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

Route::get('/', 'UserController@top')->name('user.top');
Route::get('/schoolpost/index', 'SchoolpostController@index')->name('schoolpost.index');

Route::get('/user/signin', 'UserController@signin')->name('user.signin');
Route::post('/user/login', 'UserController@login')->name('user.login');

Route::group(['middleware' => 'auth'], function() {
  Route::post('/user/logout', 'UserController@logout')->name('user.logout');
});
