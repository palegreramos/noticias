<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InicialController; 
use App\Http\Controllers\NoticiaController; 
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

Route::get('/', InicialController::class)->name('inicial');

Route::get('/noticia/{id}',NoticiaController::class)->whereNumber('id');

Route::fallback(function () {
    return redirect()->route('inicial');
});

