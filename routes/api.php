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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('api')->get('/supplier', function (Request $request) {
     Route::resource('supplier','SupplierController@index');
});

Route::middleware('api')->post('/supplier/store', function (Request $request) {
    Route::resource('supplier','SupplierController@store');
});*/

Route::post('supplier/store','SupplierController@store');
Route::resource('supplier','SupplierController');

//Route::get('manufacturer','ManufacturerController@index');
Route::resource("manufacturer",'ManufacturerController');

Route::resource('category', 'CategoryController');

Route::resource('product', 'ProductController');
Route::post('product/store','ProductController@store');

Route::resource('modelo', 'ModelController');

Route::resource('image', 'ImageController');
Route::post('image/store', 'ImageController@store');

Route::resource('departament', 'DepartamentController');

