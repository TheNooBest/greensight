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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return view('test');
});
Route::post('/test', function() {
    return Request::all();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test1', 'NewTestController@index');
Route::post('/test1', 'NewTestController@index_post');
