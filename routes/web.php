<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
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
    return view('home');
})->name('inicio');

// Las 7 rutas para realizar el CRUD de cursos

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
// Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create'); // Esta ruta dio problemas

Route::group(['middleware' => 'auth'], function () {
    Route::get('cursoscreate', [CursoController::class, 'create'])->name('cursos.create');
    // crear una ruta post para el formulario que esta en la vista cursos.create
    Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
    Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
    Route::post('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
    // Ruta para eliminar un registro con el metodo delete
    Route::post('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');
});

// ruta para el correo
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
