<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CreditoController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\ClientesController;


Route::get('/', [HomeController::class,'index']);

//// RUTA DE CREDITOS ////
Route::resource('creditos', 'App\Http\Controllers\CreditoController')->names('creditos');
//Route::get('creditos/index', [App\Http\Controllers\CreditoController::class, 'index']);
//Route::get('creditos/index', [App\Http\Controllers\CreditoController::class, 'create']);
//Route::get('creditos/index', [App\Http\Controllers\CreditoController::class, 'store']);
//// RUTA DE PAGOS ////
Route::resource('pagos', 'App\Http\Controllers\PagosController')->names('pagos');



//// RUTA DE GESTION CLIENTE ////
Route::resource('gestion', 'App\Http\Controllers\GestionController');
//// RUTA DE GESTION LLAMADA ////
Route::resource('llamada', 'App\Http\Controllers\LlamadaController');
//// RUTA DE GESTION CONSERJE ////
Route::resource('conserje', 'App\Http\Controllers\ConserjeController');
//// RUTA DE COBROS ////
Route::resource('cobro', 'App\Http\Controllers\CobroController');
//// RUTA DE PERSONAS ////
Route::resource('personas', 'App\Http\Controllers\PersonasController');
//// RUTA DE EMPRESAS ////
Route::resource('empresas', 'App\Http\Controllers\EmpresasController');
//// RUTA DE CLIENTES ////
Route::resource('clientes', 'App\Http\Controllers\ClientesController');