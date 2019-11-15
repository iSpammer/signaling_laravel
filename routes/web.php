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
    return view('welcome');
});

Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');
Route::get('/user', 'UserController@getCurrentUser');
Route::post('/update', 'UserController@update');
Route::post('/logout', 'UserController@logout');



Route::get('car/{id}', 'CarController@showCar');
Route::get('cars', 'CarController@show');

Route::get('comment/{id}', 'CommentController@showComment');
Route::get('comments', 'CommentController@show');

Route::get('rating/{id}', 'RatingController@showRating');
Route::get('ratings', 'RatingController@show');
