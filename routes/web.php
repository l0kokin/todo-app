<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('taskInner');
