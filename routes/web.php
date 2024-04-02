<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sistema;

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
/*----------------------------rutas doctor------------------------ */
Route::get('/', function () { return view('index'); });

Route::name('lista_doctor')->get('lista_doctor',[Sistema::class, 'doctor']);

Route::name('altadoctor')->get('altadoctor',[Sistema::class, 'altadoctor']);
Route::name('registrardoctor')->post('registrardoctor',[Sistema::class, 'registrardoctor']);

Route::name('detalledoctor')->get('detalle/{id_doctor}',[Sistema::class, 'detalledoctor']);

Route::name('editardoctor')->get('editardoctor/{id_doctor}',[Sistema::class, 'editardoctor']);
Route::name('salvardoctor')->put('salvardoctor/{id_doctor}',[Sistema::class, 'salvardoctor']);
Route::name('actualizarDoctor')->put('actualizarDoctor/{id_doctor}',[Sistema::class, 'actualizarDoctor']);

Route::name('borrardoctor')->get('borrardoctor/{id_doctor}',[Sistema::class, 'borrardoctor']);
 
/*----------------------------rutas paciente------------------------ */

Route::name('lista_paciente')->get('lista_paciente',[Sistema::class, 'paciente']);

Route::name('altapaciente')->get('altapaciente',[Sistema::class, 'altapaciente']);
Route::name('registrar')->post('registrar',[Sistema::class, 'registrarpaciente']);

Route::name('detallepaciente')->get('detalle/{id_paciente}',[Sistema::class, 'detallepaciente']);

Route::name('editarpaciente')->get('editarpaciente/{id_paciente}',[Sistema::class, 'editarpaciente']);
Route::name('salvarpaciente')->put('salvarpaciente/{id_paciente}',[Sistema::class, 'salvarpaciente']);

Route::name('borrarpaciente')->get('borrarpaciente/{id_paciente}',[Sistema::class, 'borrarpaciente']);

/*----------------------------rutas imagenes------------------------ */

Route::name('lista_imagenes')->get('lista_imagenes',[Sistema::class, 'imagenes']);

Route::name('altaimagenes')->get('altaimagenes',[Sistema::class, 'altaimagenes']);

Route::name('detalleimagenes')->get('detalle/{id_imagenes}',[Sistema::class, 'detalleimagenes']);

Route::name('editarimagenes')->get('editarimagenes/{id_imagenes}',[Sistema::class, 'editarimagenes']);
Route::name('salvar')->put('salvar/{id_imagenes}',[Sistema::class, 'salvarimagenes']);

Route::name('borrarimagenes')->get('borrarimagenes/{id_imagenes}',[Sistema::class, 'borrarimagenes']);

Route::name('login')->get('login',[Sistema::class,'login']);
Route::name('valida')->post('valida',[Sistema::class,'valida']);
Route::name('logout')->get('logout',[Sistema::class,'logout']);
