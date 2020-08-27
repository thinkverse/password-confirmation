<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::post('/secret', 'SecretController@store')->name('secret.store');

    Route::group(['middleware' => ['password.confirm']], function () {
        Route::get('/secret/edit', 'SecretController@edit')->name('secret.edit');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
