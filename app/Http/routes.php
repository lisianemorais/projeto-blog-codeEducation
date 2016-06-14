<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/olar', function () {
//    return 'ola bobao';
//});

Route::get('/'       , 'BlogController@index');
Route::get('meioambiente', 'BlogController@meioambiente');
Route::get('noticias', 'BlogController@noticias');
Route::get('ideias'  , 'BlogController@ideias');
