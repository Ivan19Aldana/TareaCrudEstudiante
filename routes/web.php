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
    return view('Diseño.base');
});
route::get("/LISTADO",[\App\Http\Controllers\Estudiantecontroller::class,'listado']);
route::get("/CREAR",[\App\Http\Controllers\Estudiantecontroller::class,'estudiform']);
route::get("/GUARDAR",[\App\Http\Controllers\Estudiantecontroller::class,'save'])->name("save");
route::delete("/delete/{id}",[\App\Http\Controllers\Estudiantecontroller::class,'delete'])->name('delete');
route::get("/EDITAR/{id}",[\App\Http\Controllers\Estudiantecontroller::class,'modificar'])->name('modificar');
route::get("/edita/{id}",[\App\Http\Controllers\Estudiantecontroller::class,'edit'])->name('edit');
