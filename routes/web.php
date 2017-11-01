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

Route::any('/game/d1q2', 'GameController@day1Ques2');

Route::any('/game/d1q3', 'GameController@day1Ques3');

Route::any('/game/d1result', 'GameController@day1result');

Route::post('/game/answer', 'GameController@processAnswer');

Route::any('/user/register', 'UserController@register');

Route::any('/question/{day}/{question}', 'QuestionController@show');

Route::any('/question/{user}/{day}/{question}', 'QuestionController@saveAnswer');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->get('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');
