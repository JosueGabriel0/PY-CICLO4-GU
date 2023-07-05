<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\MonitoreoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PostulacionController;
use App\Http\Controllers\TrabajoController;
use App\Models\Administrador;
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
//<--------------RUTAS PERSONAS------------------------------->
Route::get('personas/pdf', [App\Http\Controllers\PersonaController::class, 'pdf'] )->name('personas.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/persona', function (){
        return view('persona.index');
    })->name('persona');
});


Route::get('/persona', function (){
    return view('persona.index');
});

Route::resource('persona',PersonaController::class);


//<--------------RUTAS ADMINISTRADOR------------------------------->
Route::get('administradors/pdf', [App\Http\Controllers\AdministradorController::class, 'pdf'] )->name('administradors.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/administrador', function (){
        return view('administrador.index');
    })->name('administrador');
});


Route::get('/administrador', function (){
    return view('administrador.index');
});

Route::resource('administrador',AdministradorController::class);

//<--------------RUTAS INSTITUCION------------------------------->
Route::get('instituciones/pdf', [App\Http\Controllers\InstitucionController::class, 'pdf'] )->name('instituciones.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/institucion', function (){
        return view('institucion.index');
    })->name('institucion');
});


Route::get('/institucion', function (){
    return view('institucion.index');
});

Route::resource('institucion',InstitucionController::class);

//<--------------RUTAS DOCENTE------------------------------->
Route::get('docentes/pdf', [App\Http\Controllers\DocenteController::class, 'pdf'] )->name('docentes.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/docente', function (){
        return view('docente.index');
    })->name('docente');
});


Route::get('/docente', function (){
    return view('docente.index');
});

Route::resource('docente',DocenteController::class);

//<--------------RUTAS EGRESADO------------------------------->
Route::get('egresados/pdf', [App\Http\Controllers\EgresadoController::class, 'pdf'] )->name('egresados.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/egresado', function (){
        return view('egresado.index');
    })->name('egresado');
});


Route::get('/egresado', function (){
    return view('egresado.index');
});

Route::resource('egresado',EgresadoController::class);

//<--------------RUTAS MONITOREO------------------------------->
Route::get('monitoreos/pdf', [App\Http\Controllers\MonitoreoController::class, 'pdf'] )->name('monitoreos.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/monitoreo', function (){
        return view('monitoreo.index');
    })->name('monitoreo');
});


Route::get('/monitoreo', function (){
    return view('monitoreo.index');
});

Route::resource('monitoreo',MonitoreoController::class);

//<--------------RUTAS EMPRESA------------------------------->
Route::get('empresas/pdf', [App\Http\Controllers\EmpresaController::class, 'pdf'] )->name('empresas.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/empresa', function (){
        return view('empresa.index');
    })->name('empresa');
});


Route::get('/empresa', function (){
    return view('empresa.index');
});

Route::resource('empresa',EmpresaController::class);

//<--------------RUTAS TRABAJO------------------------------->
Route::get('trabajos/pdf', [App\Http\Controllers\TrabajoController::class, 'pdf'] )->name('trabajos.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/trabajo', function (){
        return view('trabajo.index');
    })->name('trabajo');
});


Route::get('/trabajo', function (){
    return view('trabajo.index');
});

Route::resource('trabajo',TrabajoController::class);


//<--------------RUTAS POSTULACION------------------------------->
Route::get('postulaciones/pdf', [App\Http\Controllers\PostulacionController::class, 'pdf'] )->name('postulaciones.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/postulacion', function (){
        return view('postulacion.index');
    })->name('postulacion');
});


Route::get('/postulacion', function (){
    return view('postulacion.index');
});

Route::resource('postulacion',PostulacionController::class);

//<--------------RUTAS IMAGES------------------------------->
Route::get('images/pdf', [App\Http\Controllers\ImagesController::class, 'pdf'] )->name('images.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/images', function (){
        return view('images.index');
    })->name('images');
});


Route::get('/images', function (){
    return view('images.index');
});

Route::resource('images',ImagesController::class);

