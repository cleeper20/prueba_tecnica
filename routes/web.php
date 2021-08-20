<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\grados;
use App\Http\Controllers\estudiante;
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

route::get('/obtener/grados', [grados::class, 'obtenerGRados']);
Route::post('/guardar/registro', [estudiante::class, 'guardarRegistro']);
Route::get('/listar/registros',[estudiante::class, 'mostrarRegistros']);
Route::post('/eliminar/estudiante', [estudiante::class, 'eliminarAlumno']);
Route::post('/editar/{id}', [estudiante::class, 'obtenerDatosEstudiante']);
Route::post('/actualizar/registro', [estudiante::class, 'editarAlumno']);