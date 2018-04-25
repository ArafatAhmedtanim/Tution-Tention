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

Route::prefix('hirer')->group(function(){
	Route::get('/', 'HirerHomeController@index')->name('hirer.dashboard');
	Route::get('/login','Auth\HirerLoginController@showLoginForm')->name('hirer.login');
	Route::post('/login','Auth\HirerLoginController@login')->name('hirer.login.submit');
	Route::resource('hirersetting','HirerSettingController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('setting','settingController');


