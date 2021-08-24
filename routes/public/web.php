<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
	/**
	 * 
	 * dikarenakan menggunakan vue router maka pastikan grouping route ini
	 * route mana yang perlu SEO nya (itu berdiri sendiri)
	 * 
	 */
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home.full');
	Route::get('/{any}', 'HomeController@index')->where('any', '.*');
});