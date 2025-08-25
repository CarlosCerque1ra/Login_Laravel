<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cadastro-user', [UserController::class, 'cadastro'])->name('user.cadastro');
Route::get('/login-user', [UserController::class, 'login'])->name('user.login');
Route::get('/home-user', [UserController::class, 'home'])->name('user.home');
Route::post('/store-user', [UserController::class, 'store'])->name('user.store');
Route::post('/logar-user', [UserController::class, 'logar'])->name('user.logar');
Route::post('../', [UserController::class, 'welcome'])->name('welcome');
Route::get('/edit-user', [UserController::class, 'edit'])->name('user.edit');
Route::post('/update-password', [UserController::class, 'updatePassword'])->name('user.updatePassword');
Route::get('/verificacao-user', [UserController::class, 'verificacao'])->name('user.verificacao');
Route::post('/verificacao-user', [UserController::class, 'verificar'])->name('user.verificar');








