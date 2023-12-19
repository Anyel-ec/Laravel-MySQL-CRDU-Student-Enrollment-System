<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;

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
Route::get('/materia', [MateriaController::class, 'index'])->name('materia.index');
Route::get('/materia/create', [MateriaController::class, 'create'])->name('materia.create');
// //Route::get('/edit', [PersonasController::class, 'edit'])->name('persona.edit');
Route::post('/materia/store', [MateriaController::class, 'store'])->name('materia.store');
Route::post('/materia/edit/{id}', [MateriaController::class, 'edit'])->name('materia.edit');
Route::post('/materia/update/{id}', [MateriaController::class, 'update'])->name('materia.update');
Route::delete('/materia/destroy/{id}', [MateriaController::class, 'destroy'])->name('materia.destroy');