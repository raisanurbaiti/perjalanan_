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
    return view('layout.landingpage');
});
Route::get('/logout','AuthController@logout');
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');

Route::get('/Register', 'AuthController@Register')->name('Register');
Route::post('/postRegister', 'AuthController@postRegister');


Route::group(['middleware' => 'auth'], function() {

    //perjalanan
    Route::get('/perjalanan', 'perjalananController@index');
    Route::get('/perjalanan/create', 'perjalananController@create');
    Route::post('/perjalanan/store', 'perjalananController@store');
    Route::get('/perjalanan/edit/{id}', 'perjalananController@edit');
    Route::put('/perjalanan/update/{id}', 'perjalananController@update');
    Route::get('/perjalanan/delete/{id}', 'perjalananController@destroy');

    //user
    Route::get('/user', 'userController@index');
    Route::get('/user/create', 'userController@create');
    Route::get('/user/edit/{id}', 'userController@edit');
    Route::put('/user/update/{id}', 'userController@update');
    Route::get('/user/delete/{id}', 'userController@destroy');

    //profile
    Route::get('/profile', 'profileController@index');
    Route::get('/profile/edit/{id}', 'profileController@edit');

    //kota


});


Route::get('/home', 'HomeController@index')->name('home');
