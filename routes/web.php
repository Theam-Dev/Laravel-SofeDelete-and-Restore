<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::get('recovery', [UserController::class, 'recovery'])->name('users.recovery');
Route::delete('users/{id}', [UserController::class, 'delete'])->name('users.delete');
Route::get('users/restore/one/{id}', [UserController::class, 'restore'])->name('users.restore');
Route::get('restoreAll', [UserController::class, 'restoreAll'])->name('users.restore.all');
