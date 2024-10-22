<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerProjeto;
use App\Http\Controllers\Contato;
use App\Http\Controllers\ControllerUsuario;

Route::get('/', [ControllerProjeto::class, 'home'])->name('paegs.home');
Route::get('/pagicontatos', [ControllerProjeto::class, 'contacts'])->name('pagicontatos');
Route::post('/pagicontatos', [Contato::class, 'store'])->name('contact.store');
Route::get('/listacontatos', [ControllerUsuario::class, 'index']);
Route::get('/edicaousuario', [ControllerUsuario::class, 'editar'])->name('edicaousuario');
