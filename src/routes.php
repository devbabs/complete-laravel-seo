<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
    Route::get('seo-dashboard', [
        'as' => 'laravel-seo.dashboard',
        'uses' => function () {
            return "Welcome to the LaravelSEO Complete Version!";
        }
    ]);
});
