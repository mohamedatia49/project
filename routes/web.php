<?php

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('Home')->middleware('verified');


Route::get('/', function () {
    return view('welcome');
});


