<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')
        ->name('login')->middleware('guest:admin');

    Route::post('login', 'Admin\Auth\LoginController@login');

    Route::get('register', 'Admin\Auth\RegisterController@showRegistrationForm')
        ->name('register')->middleware('guest:admin');

    Route::post('register', 'Admin\Auth\RegisterController@register');

    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/', function() {
            return redirect()->route('admin.home');
        });
        Route::get('/home', 'Admin\AdminController@index')->name('home');
        Route::get('/settings', 'Admin\SettingsController@index')->name('settings');
    });
});
