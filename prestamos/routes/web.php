<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\librosController;
use App\Http\Controllers\prestamosController;
use App\Http\Controllers\bibliotecariosController;
use App\Http\Controllers\Auth\LoginController;



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


Route::get('/Inicio', function () {
    return view('inicio');
});


Route::post('/welcome', [LoginController::class, 'logout']);

Route::get('/pdf_libros',[librosController::class,'pdf']);
Route::get('/pdf_prestamos',[prestamosController::class,'pdf']);
Route::get('/pdf_bibliotecarios',[bibliotecariosController::class,'pdf']);


Route::get('/Libros',[librosController::class,'index']);
Route::post('/Libros',[librosController::class,'store']);
Route::get('/Libros{id}',[librosController::class,'show']);
Route::get('/Libros{id}/libros_edit',[librosController::class,'edit']);
Route::put('/Libros{id}',[librosController::class,'update']);
Route::delete('/Libros{id}',[librosController::class,'destroy']);


Route::get('/Prestamos',[prestamosController::class,'index']);
Route::post('/Prestamos',[prestamosController::class,'store']);
Route::get('/Prestamos{id}',[prestamosController::class,'show']);
Route::get('/Prestamos{id}/prestamos_edit',[prestamosController::class,'edit']);
Route::put('/Prestamos{id}',[prestamosController::class,'update']);
Route::delete('/Prestamos{id}',[prestamosController::class,'destroy']);


Route::get('/Bibliotecario',[bibliotecariosController::class,'index']);
Route::post('/Bibliotecario',[bibliotecariosController::class,'store']);
Route::get('/Bibliotecario{id}',[bibliotecariosController::class,'show']);
Route::get('/Bibliotecario{id}/bibliotecarios_edit',[bibliotecariosController::class,'edit']);
Route::put('/Bibliotecario{id}',[bibliotecariosController::class,'update']);
Route::delete('/Bibliotecario{id}',[bibliotecariosController::class,'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
