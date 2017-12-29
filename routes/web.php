<?php


//items

Route::resource('/home', 'HomeController', [
  'names' => [
    'index' => 'home'
  ],
  'only' => ['index']
]);

Route::resource('/register','RegistrationController', [
  'only' => [
    'index','store'
  ]
]);

// Route::get('/register','RegistrationController@create');
//
// Route::post('/register','RegistrationController@store');

Route::resource('/items','ItemsController');

Route::resource('/login','SessionsController', [
  'names' => [
    'index' => 'login'
  ],
  'only' => ['index','store']
]);

Route::post('/logout','SessionsController@destroy');


Route::resource('users','UsersController');

Route::get('/users/{user}/deactivate','UsersController@ban');
Route::get('/users/{user}/activate','UsersController@unban');
