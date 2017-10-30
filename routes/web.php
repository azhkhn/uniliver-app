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

Route::any('game', 'GameController@start');
Route::any('game/{day}/{ques}', 'GameController@dayQues');

Route::any('user/register', 'UserController@register');

Route::any('question/{day}/{question}', 'QuestionController@show');

Route::any('question/{user}/{day}/{question}', 'QuestionController@saveAnswer');
