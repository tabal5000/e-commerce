<?php

Route::get('/items','ItemsController@index');

Route::get('/items/create','ItemsController@create');

Route::get('/items/{id}','ItemsController@show');

// post

Route::post('/items','ItemsController@store');
