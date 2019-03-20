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

 
Route::get('/geo', function () {
    return view('geo');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/feed','HomeController@feed')->name('feed');
Route::post('/post','HomeController@post')->name('post');
Route::get('/search','HomeController@search'); //ajax controller
Route::post('/comments','HomeController@comments')->name('comments');


//Comment
Route::post('/comment','AdminController@comment')->name('comment');

Route::prefix('admin')->group(function(){

    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
});


