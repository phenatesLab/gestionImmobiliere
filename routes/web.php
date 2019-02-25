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

Route::get('/', 'WelcomeController@index');

Route::get('/contact', 'WelcomeController@contact')->name('contact');

Route::get('/biens', 'WelcomeController@show')->name('goods.show');

Route::get('/a_propos', 'WelcomeController@about')->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});


