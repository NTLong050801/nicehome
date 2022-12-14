<?php

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

Route::prefix('nicehome')->group(function() {
    Route::get('/', 'NicehomeController@index');
    Route::get('/design', 'NicehomeController@design');
    Route::get('/detail', 'NicehomeController@detail');
});
