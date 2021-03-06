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

Route::any('/', 'GameController@home');


Route::get('/game', 'GameController@start')->name('game');


Route::any('/game/d/{day}/result', 'GameController@result')->name('showResult');

Route::post('/game/answer', 'GameController@processAnswer');

Route::get('/game/d/{day}/q/{question}', 'QuestionController@show')->name('showQuestion');


// Authentication Routes...

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');
