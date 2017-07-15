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

//Route::get('/','TaskController@index');
//Route::get('/tasks/{task}','TaskController@show');

//Main Index
Route::get('/','PostsController@index')->name('home');

//Post Routes
Route::get('/posts/create','PostsController@create')->name('create_post');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}','PostsController@show');
Route::post('/posts/{post}/comments','CommentsController@store');

//Tags Route
Route::get('/posts/tags/{tags}','TagsController@index');

//Auth Route(Register)
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

//Auth Route(Login)
Route::get('/login','SessionsController@create')->name('login');
Route::post('/login','SessionsController@store')->name('login_store');

//Auth Route(Logout)
Route::get('/logout','SessionsController@destroy')->name('logout');
