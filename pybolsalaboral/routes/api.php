<?php

use App\Http\Controllers\AdministradorRestController;
use App\Http\Controllers\DocenteRestController;
use App\Http\Controllers\EgresadoRestController;
use App\Http\Controllers\EmpresaRestController;
use App\Http\Controllers\ImagesRestController;
use App\Http\Controllers\InstitucionRestController;
use App\Http\Controllers\MonitoreoRestController;
use App\Http\Controllers\PersonaRestController;
use App\Http\Controllers\PostulacionRestController;
use App\Http\Controllers\TrabajoRestController;
use App\Models\Administrador;
use App\Models\Docente;
use App\Models\Institucion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('personas',PersonaRestController::class);
Route::apiResource('administradors',AdministradorRestController::class);
Route::apiResource('institucions',InstitucionRestController::class);
Route::apiResource('docentes',DocenteRestController::class);
Route::apiResource('egresados',EgresadoRestController::class);
Route::apiResource('monitoreos',MonitoreoRestController::class);
Route::apiResource('empresas',EmpresaRestController::class);
Route::apiResource('trabajos',TrabajoRestController::class);
Route::apiResource('postulacions',PostulacionRestController::class);
Route::apiResource('images',ImagesRestController::class);

