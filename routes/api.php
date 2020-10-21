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
    Route::post('/getparceltimeline','ApiController@get_timeline');
    Route::post('/fetch_all','ApiController@fetch_all');
    Route::post('/generatereceipt','ApiController@generate_receipt');
    Route::post('/generatereceipttimeline','ApiController@generate_receipt_timeline');
    Route::post('/updateparcel','ApiController@update_parcel');
    Route::post('/resetparcelstatus','ApiController@reset_parcel_shipping_status');
    Route::post('/deleteparcel','ApiController@delete_parcel');
 });
 Route::group(['prefix' => 'requests'], function () {
    Route::post('/quote', 'ApiController@request_quote');
    Route::post('/fetch_all', 'ApiController@view_requests');
});

Route::post('/send_email', 'ApiController@send_email');
