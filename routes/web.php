<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::post('/login', [SessionController::class, 'store'])->name('session.store');
Route::get('/login', [SessionController::class, 'create'])->name('session.create');
Route::get('/logout', [SessionController::class, 'destroy'])->name('session.destroy');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
