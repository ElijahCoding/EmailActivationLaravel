<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

ROute::get('/auth/activate', 'Auth\ActivationController@activate')->name('auth.activate');

Route::get('/home', 'HomeController@index')->name('home');
