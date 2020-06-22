<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ImageController@create');
Route::post('/', 'ImageController@store');
Route::get('/{image}' , 'ImageController@show');