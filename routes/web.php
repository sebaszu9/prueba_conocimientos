<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

///Todas las rutas de los estudiantes

Route::get('/estudiantes', [App\Http\Controllers\EstudiantesController::class, 'index'])
    ->name('estudiantes.index');

Route::get('/estudiantes/create', [App\Http\Controllers\EstudiantesController::class, 'create'])
    ->name('estudiantes.create');

Route::post('/estudiantes/create', [App\Http\Controllers\EstudiantesController::class, 'store'])
    ->name('estudiantes.store');

Route::post('/estudiantes/delete/{id}', [App\Http\Controllers\EstudiantesController::class, 'destroy'])
    ->name('estudiantes.destroy');

Route::get('/estudiantes/edit/{id}', [App\Http\Controllers\EstudiantesController::class, 'edit'])
    ->name('estudiantes.edit');
    
Route::post('/estudiantes/update/{id}', [App\Http\Controllers\EstudiantesController::class, 'update'])
    ->name('estudiantes.update');


//Todas as rutas de los padres de familia

Route::get('/padres', [App\Http\Controllers\PadresController::class, 'index'])
    ->name('padres.index');

Route::get('/padres/create', [App\Http\Controllers\PadresController::class, 'create'])
    ->name('padres.create');

Route::post('/padres/create', [App\Http\Controllers\PadresController::class, 'store'])
    ->name('padres.store');

Route::post('/padres/delete/{id}', [App\Http\Controllers\PadresController::class, 'destroy'])
    ->name('padres.destroy');

Route::get('/padres/edit/{id}', [App\Http\Controllers\PadresController::class, 'edit'])
    ->name('padres.edit');
    
Route::post('/padres/update/{id}', [App\Http\Controllers\PadresController::class, 'update'])
    ->name('padres.update');


//Reporte
Route::get('/vistapdf', [App\Http\Controllers\ReporteController::class, 'index'])
    ->name('reporte.index');
Route::post('/reporte', [App\Http\Controllers\ReporteController::class, 'reporte'])
    ->name('reporte');;
