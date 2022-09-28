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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', 'HomeController@index')->name('site.index');
Route::get('/portfolio', 'HomeController@portfolio')->name('site.portfolio');
Route::get('/contato', 'HomeController@contato')->name('site.contato');

Route::post('/envio-contato', 'HomeController@envioContato')->name('site.envio-contato');
Route::post('/envio-comentario', 'HomeController@envioComentario')->name('site.envio-comentario');
