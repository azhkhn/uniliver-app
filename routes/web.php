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

Route::any('user', 'UserController@show');

Route::get('game', 'GameController@start');

Route::any('game/d1q1', 'GameController@day1Ques1');

Route::any('game/d1q2', 'GameController@day1Ques2');

Route::any('game/d1q3', 'GameController@day1Ques3');

Route::any('game/d1result', 'GameController@day1result');

Route::post('game/answer', 'GameController@processAnswer');

Route::any('user/register', 'UserController@register');

Route::any('question/{day}/{question}', 'QuestionController@show');

Route::any('question/{user}/{day}/{question}', 'QuestionController@saveAnswer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
