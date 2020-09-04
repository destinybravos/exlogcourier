<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'notification'], function () {
    Route::post('/check', 'ApiController@check_notification');
    Route::delete('/delete', 'ApiController@delete_notification');
    Route::post('/create', 'ApiController@create_notification');
});
 Route::group(['prefix' => 'parcel'], function() {
    Route::post('/create', 'ApiController@create_parcel');
    Route::post('/getparcel','ApiController@get_parcel');
    Route::post('/fetch_all','ApiController@fetch_all');
 });


