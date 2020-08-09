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

    Route::get('/', 'HomeController@welcome')->name('home-page');
    Route::group(['prefix' => 'painel'], function () {
        Route::resource('mensagem', 'Painel\Admin\MensagemController');
        Route::group(['middleware' => ['auth']], function () {
            Route::resource('admin', 'Painel\Admin\adminController');
            Route::resource('layout', 'Painel\Admin\layoutController');
        });
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
