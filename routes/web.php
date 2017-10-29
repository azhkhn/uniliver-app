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

Route::get('/', 'UserController@login');

Route::get('user/', 'UserController@show');

Route::get('user/register', 'UserController@register');

Route::get('question/{day}/{question}', 'QuestionController@show');

Route::get('question/{user}/{day}/{question}', 'QuestionController@saveAnswer');
