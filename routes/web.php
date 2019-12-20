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

Route::get('profiles/myprofile', 'ProfileController@myprofile')->name('profiles.myprofile')
    ->middleware('auth')->middleware('checkifhasprofile');

Route::get('profiles/create', 'ProfileController@create')->name('profiles.create');

Route::post('profiles', 'ProfileController@store')->name('profiles.store');

Route::get('profiles/{profile}', 'ProfileController@show')->name('profiles.show');

Route::delete('profiles/{profile}', 'ProfileController@destroy')->name('profiles.destroy');
    
Route::get('posts', 'PostController@index')->name('posts.index');

Route::get('posts/create', 'PostController@create')->name('posts.create')
    ->middleware('auth')->middleware('checkifhasprofile');

Route::post('posts', 'PostController@store')->name('posts.store');

Route::get('posts/edit/{post}', 'PostController@edit')->name('posts.edit')
    ->middleware('auth')->middleware('checkifposted');

Route::post('posts/{post}', 'PostController@update')->name('posts.update');

Route::get('posts/{post}', 'PostController@show')->name('posts.show');

Route::get('comments/create/{post}', 'CommentController@create')->name('comments.create')
    ->middleware('auth')->middleware('checkifhasprofile');

Route::get('comments/edit/{comment}', 'CommentController@edit')->name('comments.edit')
    ->middleware('auth')->middleware('checkifhasprofile')->middleware('checkifcommented');

Route::post('comments/{comment}', 'CommentController@update')->name('comments.update');

Route::post('comments', 'CommentController@store')->name('comments.store')
    ->middleware('auth')->middleware('checkifhasprofile');

Route::get('comments/{comment}', 'CommentController@show')->name('comments.show');

Route::get('groups', 'GroupController@index')->name('groups.index');

Route::get('groups/create', 'GroupController@create')->name('groups.create');

Route::post('groups', 'GroupController@store')->name('groups.store');

Route::get('group/join/{group}', 'GroupController@join')->name('groups.join');

Route::get('groups/{group}', 'GroupController@show')->name('groups.show');

Route::get('api/comments/{post}', 'CommentController@apiIndex')->name('api.comments.index');

Route::post('api/comments', 'CommentController@apiStore')->name('api.comments.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
