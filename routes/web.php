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
    return view('layouts.app');
});

Route::get('profiles', 'ProfileController@index')->name('profiles.index');

Route::get('profiles/create', 'ProfileController@create')->name('profiles.create');

Route::post('profiles', 'ProfileController@store')->name('profiles.store');

Route::get('profiles/{id}', 'ProfileController@show')->name('profiles.show');
    
