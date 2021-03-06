<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;

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

Route::get('/', HomeController::class)-> name('inicio');
Route::get('productos', [ProductosController::class, 'index'])-> name('productos.index');
Route::get('productos/celulares', [ProductosController::class, 'celulares'])-> name('productos.celulares');
Route::get('productos/computadores', [ProductosController::class, 'computadores'])-> name('productos.computadores');
Route::get('productos/electrodomesticos', [ProductosController::class, 'electrodomesticos'])-> name('productos.electrodomesticos');
