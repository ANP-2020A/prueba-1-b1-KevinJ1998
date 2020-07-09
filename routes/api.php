<?php

use Illuminate\Http\Request;

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

//products

Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::post('products', 'ProductController@save');
Route::put('products/{product}', 'ProductController@update');
Route::put('products/{product}', 'ProductController@delete');


//customers

Route::get('customers', 'CustomerController@index');
Route::get('customers/{customer}', 'CustomerController@show');
Route::post('customers', 'CustomerController@save');
Route::put('customers/{customer}', 'CustomerController@update');
Route::delete('customers/{customer}', 'CustomerController@delete');


