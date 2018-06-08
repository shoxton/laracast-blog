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

//Posts controller
Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

//Comments controller
Route::get('/posts/{post}/comments', 'CommentsController@create');

Route::post('/posts/{post}/comments', 'CommentsController@store');

//Registration controller
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

//Sessions controller
Route::get('/login','SessionsController@create')->name('login');

Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');

//Users controller
Route::get('/users','UsersController@index');

Route::get('/users/{user}','UsersController@show');

Route::get('/profile','UsersController@update');
