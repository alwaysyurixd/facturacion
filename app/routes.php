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

Route::get('/', function()
{
	return View::make('login');
});
Route::get('inicio', function()
{
    return View::make('login');
});
Route::any('ingreso', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::any('dni', function()
{
    return View::make('index');
});

Route::controller('facultad','facultadController');
Route::controller('escuela','escuelaController');
Route::controller('trabajador','trabajadorController');
Route::controller('operacion','operacionController');
Route::controller('concepto','conceptoController');
Route::get('newConcepto', function()
{
    return View::make('conceptos.nuevo');
});