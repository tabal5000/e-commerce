<?php

<<<<<<< HEAD
=======

//items

>>>>>>> ccc2b6e64285acdbebcb89fee9ecae346cdc140a
Route::resource('/home', 'HomeController', [
  'names' => [
    'index' => 'home'
  ],
  'only' => ['index']
]);

<<<<<<< HEAD
Route::get('/verifyemail/{token}', 'RegistrationController@verify');
=======
>>>>>>> ccc2b6e64285acdbebcb89fee9ecae346cdc140a
Route::resource('/register','RegistrationController', [
  'only' => [
    'index','store'
  ]
]);

<<<<<<< HEAD
Route::post('/logout','SessionsController@destroy');
Route::resource('/login','SessionsController', [
  'names' => [
    'index' => 'login'
  ],
  'only' => ['index','store']
]);

Route::get('/','ItemsController@index');
=======
// Route::get('/register','RegistrationController@create');
//
// Route::post('/register','RegistrationController@store');

>>>>>>> ccc2b6e64285acdbebcb89fee9ecae346cdc140a
Route::resource('/items','ItemsController');

Route::get('/orders','OrdersController@index');
Route::get('/orders/{order}/accept','OrdersController@acceptOrder');
Route::get('/orders/{order}/reject','OrdersController@rejectOrder');
Route::delete('/orders/{order}','OrdersController@deleteOrder');
Route::get('/myOrders','OrdersController@userOrders');


Route::get('/addToCart/{id}','ShoppingCartController@addToCart');
Route::get('/reduce/{id}','ShoppingCartController@getReduceByOne');
Route::get('/remove/{id}','ShoppingCartController@getRemoveItem');
Route::get('/shopping-cart','ShoppingCartController@getCart');
Route::get('/checkout','ShoppingCartController@getCheckout');
Route::post('/checkout','ShoppingCartController@postCheckout');

<<<<<<< HEAD
=======
Route::resource('/login','SessionsController', [
  'names' => [
    'index' => 'login'
  ],
  'only' => ['index','store']
]);

Route::post('/logout','SessionsController@destroy');

>>>>>>> ccc2b6e64285acdbebcb89fee9ecae346cdc140a
Route::get('/users/settings','UsersController@changeSettings');
Route::get('/createAccount', 'UsersController@showNewAccount');
Route::post('/createAccount', 'UsersController@createNewAccount');
Route::resource('users','UsersController');
<<<<<<< HEAD
Route::get('/users/{user}/deactivate','UsersController@ban');
Route::get('/users/{user}/activate','UsersController@unban');
=======


Route::get('/users/{user}/deactivate','UsersController@ban');
Route::get('/users/{user}/activate','UsersController@unban');

Route::get('/verifyemail/{token}', 'RegistrationController@verify');
>>>>>>> ccc2b6e64285acdbebcb89fee9ecae346cdc140a
