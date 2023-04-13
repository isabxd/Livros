<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;

Route::get('/', function () {
    return view('welcome');
});

                            //LIVROS

Route::get('/livros', [LivrosController::class, 'index'])->name('livros.index');


Route::get('/livros/novo', [LivrosController::class, 'create'])->name('livros.create');

Route::get('/livros/{livro}', [LivrosController::class, 'show'])->name('livros.show');

Route::get('/livros/{livro}/editar', [LivrosController::class, 'edit'])->name('livros.edit');

Route::post('/livros', [LivrosController::class, 'store'])->name('livros.store');

Route::put('/livros/{livro}', [LivrosController::class, 'update'])->name('livros.update');

Route::delete('/livros/{livro}', [LivrosController::class, 'destroy'])->name('livros.destroy');