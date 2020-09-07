<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@index')->name('welcome');
Route::get('/welcome', 'PageController@index')->name('welcome');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/services', 'PageController@services')->name('services');
Route::get('/tracking', 'PageController@tracking')->name('tracking');
Route::get('/trackinginput', 'PageController@trackinginput')->name('trackinginput');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
