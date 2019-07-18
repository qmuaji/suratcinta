<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('user/{id}', 'UserController@showProfile');
Route::get('passport/{id}', 'UserController@showPassport');
Route::get('lesson/{id}', 'UserController@showLesson');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 260a838feff1ff2b276cc4045ce398aec694a1a3
