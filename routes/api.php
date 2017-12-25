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


Route::get('/items','ItemsAPIController@index');

Route::get('/items/{item}','ItemsAPIController@show');

Route::post('/items','ItemsAPIController@store');

Route::put('/items/{item}', 'ItemsAPIController@update');

Route::delete('/items/{item}', 'ItemsAPIController@delete');
