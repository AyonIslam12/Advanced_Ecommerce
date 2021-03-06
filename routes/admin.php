<?php
use Illuminate\Support\Facades\Route;
Route::group(['prefix'  =>  'admin'], function () {

     Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
     Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');


     Route::group(['middleware' => ['admin-auth','admin-status']], function () {
        Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');

        Route::get('/settings', 'Admin\SettingController@index')->name('admin.settings');
        Route::post('/settings', 'Admin\SettingController@update')->name('admin.settings.update');


    });
    });
