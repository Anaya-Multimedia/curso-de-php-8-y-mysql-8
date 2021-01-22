<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/usuarios/create', 'App\Http\Controllers\API\UsuariosController@create');
Route::get('/usuarios/list', 'App\Http\Controllers\API\UsuariosController@list');
Route::delete('/usuarios/{id}', 'App\Http\Controllers\API\UsuariosController@delete');
Route::get('/usuarios/{id}', 'App\Http\Controllers\API\UsuariosController@edit');
Route::put('/usuarios/{id}', 'App\Http\Controllers\API\UsuariosController@update');