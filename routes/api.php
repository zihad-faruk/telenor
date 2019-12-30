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

Route::post('/values','telenorController@create');
Route::get('/values','telenorController@show');
//  Route::get('/values/{id}','telenorController@showbyid');
Route::get('/values/{id}','telenorController@showbyid');
Route::patch('/values','telenorController@updatebyid');
Route::get('/delete',function(){

    dispatch(new deleteData());
    Artisan::call('queue:work');
});