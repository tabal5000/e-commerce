<?php

use Illuminate\Http\Request;
Use App\Item;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Items API

Route::get('/items','ItemsAPIController@index');

Route::get('/items/{item}','ItemsAPIController@show');

Route::post('/items','ItemsAPIController@store');

Route::put('/items/{item}', 'ItemsAPIController@update');

Route::delete('/items/{item}', 'ItemsAPIController@delete');

//Users API

Route::get('/users','UsersAPIController@index');

Route::get('/users/{user}','UsersAPIController@show');

Route::post('/users', 'UsersAPIController@store');

Route::put('/users/{user}','UsersAPIController@update');

Route::delete('/users/{user}','UsersAPIController@delete');

Route::get('/users/{user}/deactivate','UsersAPIController@ban');
Route::get('/users/{user}/activate','UsersAPIController@unban');

Route::post('/checkout','ShoppingCartAPIController@storeOrder');

Route::get('/orders','OrdersAPIController@index');
Route::get('/orders/{order}/accept','OrdersAPIController@acceptOrder');
Route::get('/orders/{order}/reject','OrdersAPIController@rejectOrder');
Route::delete('/orders/{order}','OrdersAPIController@deleteOrder');
