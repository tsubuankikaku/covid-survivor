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


Route::get('/', 'UsersController@index');


// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');    
    // 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');



Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController');
    Route::resource('experiences', 'ExperiencesController');
});

// いいねボタン
Route::get('/like/{experience}', 'LikesController@like')->name('like');
Route::get('/unlike/{experience}', 'LikesController@unlike')->name('unlike');

//Route::resource('/surveys', 'SurveysController', ['only' => ['index', 'create', 'store']]);


Route::get('/job/chart', 'JobsController@chart')->name('job.chart');
Route::post('/job/vote', 'JobsController@vote')->name('job.vote');

