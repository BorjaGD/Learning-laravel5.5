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
    //return view('welcome');
    return 'Home';
});

Route::get('/users', 'UserController@index')
    ->name('users.index');

Route::get('/users/{id}', 'UserController@showUserDetails')->where('id', '\d+')
    ->name('users.show');

Route::get('/users/new', 'UserController@createUser')
    ->name('users.create');

Route::get('/users/{id}/edit', 'UserController@edit')->where('id', '\d+')
    ->name('users.edit');

Route::get('/greeting/{name}/{nickname}', 'WelcomeUserController@index1')
    ->name('users.namecomplete');

Route::get('/greeting/{name}', 'WelcomeUserController@index2')
    ->name('users.name');


