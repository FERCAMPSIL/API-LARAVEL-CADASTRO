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

Route::apiResource('marcas', 'MarcaController');
Route::apiResource('modelos', 'ModeloController');
///books/53/ratings será usado para avaliar o marca com o ID de 53
Route::post('marcas/{marca}/modelos', 'ModeloController@store');
