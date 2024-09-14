<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ColoresController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\ImpuestosController;
use App\Http\Controllers\TallasController;
use App\Http\Controllers\TelasController;
use App\Http\Controllers\TiposClientesController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/////////////////////////////////////////////
////////////////// CLIENTES /////////////////
/////////////////////////////////////////////
Route::post('/clientes', [ClientesController::class, 'save']);//Api para crear un cliente
Route::get('/clientes', [ClientesController::class, 'get']);//Api para obtener todos los clientes
Route::get('/cliente/{id}', [ClientesController::class, 'show']);//Api para obtener la informacion del cliente
Route::patch('/clientes', [ClientesController::class, 'update']);//Actualiza la informacion de un cliente
Route::delete('/clientes/{id}', [ClientesController::class, 'delete']);//Elimina un cliente

/////////////////////////////////////////////
////////////////// COLORES //////////////////
/////////////////////////////////////////////
Route::post('/colores', [ColoresController::class, 'save']);//Api para crear un color
Route::get('/colores', [ColoresController::class, 'get']);//Api para obtener todos los colores
Route::get('/color/{id}', [ColoresController::class, 'show']);//Api para obtener la informacion de un color
Route::patch('/colores', [ColoresController::class, 'update']);//Actualiza la informacion de un color
Route::delete('/colores/{id}', [ColoresController::class, 'delete']);//Elimina un color

/////////////////////////////////////////////
////////////////// CONTACTOS ////////////////
/////////////////////////////////////////////
Route::post('/contactos', [ContactosController::class, 'save']);//Api para crear un contacto
Route::get('/contactos', [ContactosController::class, 'get']);//Api para obtener todos los contactos
Route::get('/contacto/{id}', [ContactosController::class, 'show']);//Api para obtener la informacion de un contacto
Route::patch('/contactos', [ContactosController::class, 'update']);//Actualiza la informacion de un contacto
Route::delete('/contactos/{id}', [ContactosController::class, 'delete']);//Elimina un contacto

/////////////////////////////////////////////
////////////////// IMPUESTOS ////////////////
/////////////////////////////////////////////
Route::post('/impuestos', [ImpuestosController::class, 'save']);//Api para crear un impuesto
Route::get('/impuestos', [ImpuestosController::class, 'get']);//Api para obtener todos los impuestos
Route::get('/impuesto/{id}', [ImpuestosController::class, 'show']);//Api para obtener la informacion de un impuesto
Route::patch('/impuestos', [ImpuestosController::class, 'update']);//Actualiza la informacion de un impuesto
Route::delete('/impuestos/{id}', [ImpuestosController::class, 'delete']);//Elimina un impuesto

/////////////////////////////////////////////
////////////////// TALLAS ////////////////
/////////////////////////////////////////////
Route::post('/tallas', [TallasController::class, 'save']);//Api para crear un tallas
Route::get('/tallas', [TallasController::class, 'get']);//Api para obtener todos los impuestos
Route::get('/talla/{id}', [TallasController::class, 'show']);//Api para obtener la informacion de un impuesto
Route::patch('/tallas', [TallasController::class, 'update']);//Actualiza la informacion de un impuesto
Route::delete('/tallas/{id}', [TallasController::class, 'delete']);//Elimina un impuesto

/////////////////////////////////////////////
////////////////// TELAS ////////////////////
/////////////////////////////////////////////
Route::post('/telas', [TelasController::class, 'save']);//Api para crear un telas
Route::get('/telas', [TelasController::class, 'get']);//Api para obtener todos los telas
Route::get('/tela/{id}', [TelasController::class, 'show']);//Api para obtener la informacion de un telas
Route::patch('/telas', [TelasController::class, 'update']);//Actualiza la informacion de un telas
Route::delete('/telas/{id}', [TelasController::class, 'delete']);//Elimina un telas


/////////////////////////////////////////////
////////////// TIPOS CLIENTES ///////////////
/////////////////////////////////////////////
Route::post('/tipos_clientes', [TiposClientesController::class, 'save']);//Api para crear un tipo de cliente
Route::get('/tipos_clientes', [TiposClientesController::class, 'get']);//Api para obtener todos los tipos de clientes
Route::get('/tipo_cliente/{id}', [TiposClientesController::class, 'show']);//Api para obtener la informacion de un tipo de cliente
Route::patch('/tipos_clientes', [TiposClientesController::class, 'update']);//Actualiza la informacion de un tipo de cliente
Route::delete('/tipos_clientes/{id}', [TiposClientesController::class, 'delete']);//Elimina un tipo de cliente
