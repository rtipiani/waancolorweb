<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SuscripcionController;
use App\Http\Controllers\ContactoController;

Route::view('/', 'home')->name('home');
Route::view('/nosotros', 'about')->name('nosotros');
Route::view('/servicios', 'services')->name('servicios');
Route::view('/contactanos', 'contacts')->name('contactanos');

Route::post('/guardar-suscripcion', [SuscripcionController::class, 'guardar']);
Route::post('/enviar-formulario', [ContactoController::class, 'enviarFormulario'])->name('enviarFormulario');

Route::view('/politicas-de-privacidad', 'politicas-de-privacidad')->name('politicas-de-privacidad');
Route::view('/terminos-y-condiciones', 'terminos-y-condiciones')->name('terminos-y-condiciones');
