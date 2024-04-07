<?php


use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::prefix('dashboard')->name('dashboard.')->group(function (){

        Route::get('/index','DashboardController@index')->name('index');
        Route::get('users' ,'UserController@index')->name('users.index');
        Route::get('users/create' ,'UserController@create')->name('users.create');

    });
});

