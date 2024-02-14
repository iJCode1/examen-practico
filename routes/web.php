<?php

use App\Http\Controllers\TblcontrolcargaController;
use App\Http\Controllers\TblgruposSistemasController;
use App\Http\Controllers\TblSolicitudesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Mostrar los grupos registrados
Route::get('/grupos', [TblgruposSistemasController::class, 'showGrupos']);

// Asignar solicitud
Route::get('/asignarSolicitud/{nombre_solicitante}/{paterno_solicitante}/{materno_solicitante}/{activo}/{fecha_solicitud}', [TblSolicitudesController::class, 'asignarSolicitud']);

// Registrar control carga
Route::get('/registerCarga/{id_usuario}/{anio}/{total}', [TblcontrolcargaController::class, 'registerCarga']);