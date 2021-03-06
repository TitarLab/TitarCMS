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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function () {
    Route::get('/','Admin\IndexController@index');

    Route::prefix("menu")->group(function (){
        Route::get('/','Admin\MenuController@index')->name("menu");
    });

    Route::get('/login','Admin\IndexController@loginPage')->name("login");
    Route::post('/login','Admin\IndexController@login');

    Route::get('/logout','Admin\IndexController@logout');
    Route::post('/logout','Admin\IndexController@logout');
});



