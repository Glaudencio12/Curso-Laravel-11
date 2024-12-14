<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//CRIA UMA ROTA PARA O ARQUIVO INDEX.BLADE.PHP EM RESOURCES/VIEWS/ADMIN/USER RETORNANDO UM ARRAY DE INFORMAÇÕES
//ARQUIVO ESSE CHAMADO PELO CONTROLLER USERCONTROLLER EM APP/HTTP/CONTROLLER/ADMIN
Route::get('/users', [UserController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
