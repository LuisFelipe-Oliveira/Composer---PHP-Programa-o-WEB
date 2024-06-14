<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function() {
    return redirect()->route("alunos.index");
});

Route::resources([
    'alunos' => AlunoController::class
]);

Route::get('/alunos/delete/{id}', [AlunoController::class, 'delete'])->name('alunos.delete');