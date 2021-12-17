<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelacionController;
use App\Http\Controllers\ToyController;

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

Route::get('/', [RelacionController::class, 'index'])->name('home');


Route::resource('categorias', CategoriaController::class)->parameters(['categorias' => 'categoria'])->names('categorias');

Route::resource('productos', ProductoController::class)->parameters(['productos' => 'producto'])->names('productos');

Route::resource('toys', ToyController::class)->names('toys');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
