<?php


//items
Route::get('/home','ItemsController@index')->name('home');

Route::get('/items/create','ItemsController@create');

Route::get('/items/{id}','ItemsController@show');

Route::post('/items','ItemsController@store');

//user auths

//Auth::routes();

//Route::get('/', 'HomeController@index');



Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');



Route::get('/login','SessionsController@create')->name('login');

Route::post('/login','SessionsController@store');

Route::post('/logout','SessionsController@destroy');



Route::get('/users','UsersController@index');

Route::delete('/users/{id}','UsersController@destroy');
