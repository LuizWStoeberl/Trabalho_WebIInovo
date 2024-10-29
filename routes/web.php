<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerProjeto;
use App\Http\Controllers\Contato;
use App\Http\Controllers\ControllerUsuario;

Route::get('/', [ControllerProjeto::class, 'home'])->name('pages.home');
Route::get('/pagicontatos', [ControllerProjeto::class, 'contacts'])->name('pagicontatos');
Route::post('/pagicontatos', [Contato::class, 'store'])->name('contact.store');
Route::get('/listacontatos', [ControllerUsuario::class, 'index'])->name('listacontatos');
Route::get('/edicaousuario', [ControllerProjeto::class, 'edicao'])->name('edicaousuario');
Route::get('/edicaousuario/{name}', [ControllerUsuario::class, 'buscarContato'])->name('buscarContato');
Route::post('/edicaousuario/{id}', [ControllerUsuario::class, 'atualizarContato'])->name('atualizarContato');
