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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/log', 'HomeController@login');
Route::get('/sign', 'HomeController@sign');
Route::get('/blog', 'HomeController@blog');
Route::get('/about', 'HomeController@aboutus');
Route::get('/contact', 'HomeController@contactus');
