<?php

use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('category','Api\CategoryController@index');
Route::post('category/store','Api\CategoryController@store');
Route::delete('category/delete/{id}','Api\CategoryController@destroy');
Route::get('category/edit/{id}','Api\CategoryController@edit');
Route::put('category/update/{id}','Api\CategoryController@update');
