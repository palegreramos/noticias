<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCategoriaController;

use App\Models\Noticia;
use App\Models\NoticiaCategoria;
use App\Models\Categoria;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('noticia', 'App\Http\Controllers\ApiNoticiaController')->only(['show']);

Route::apiResource('noticias','App\Http\Controllers\ApiNoticiasController' )->only(['show']);

Route::get('categoria/{id}/{page}','App\Http\Controllers\ApiCategoriaController');



