<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'carnetController@mostrarForm'));
Route::get('/tipodocumento', array('uses' => 'tipodocumentoController@listaCombo'));

Route::get('/carnet/lista/{id}/',array('uses' => 'carnetController@getCarnet'));
Route::get('/carnet', array('uses' => 'carnetController@index'));
