<?php

Route::domain(env('APP_ADMIN'))->group(function () {
    Route::group(['namespace' => 'ckissi\saas\src\http\controllers', 'middleware' => ['web']], function () {

        Route::get('/', function () {
            return response()->redirectToRoute('login');
        });

        Route::get('profile', 'ProfileController@editProfile')->name('profile.edit');
    });
});