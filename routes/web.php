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

Route::any('/', 'UserController@login');

Route::any('/user', 'UserController@show');

Route::get('/game', 'GameController@start')->name('game');

Route::any('/game/d1q1', 'GameController@day1Ques1');

Route::any('/game/d1q2', 'GameControld1q1ler@day1Ques2');

Route::any('/game/d1q3', 'GameController@day1Ques3');

Route::any('/game/d1result', 'GameController@day1result');

Route::post('/game/answer', 'GameController@processAnswer');

Route::any('/question/{day}/{question}', 'QuestionController@show');

Route::any('/question/{user}/{day}/{question}', 'QuestionController@saveAnswer');

// Authentication Routes...

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');
