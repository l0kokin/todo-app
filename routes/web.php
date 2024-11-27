<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::post('/login', [SessionController::class, 'store'])->name('session.store');
Route::get('/login', [SessionController::class, 'create'])->name('session.create');
Route::get('/logout', [SessionController::class, 'destroy'])->name('session.destroy');

Route::prefix('tasks')->name('tasks.')->controller(TaskController::class)->group(function () {
	Route::get('/', 'index')->name('index');
	Route::get('/create', 'create')->name('create');
	Route::post('/', 'store')->name('store');
	Route::get('/{task}', 'show')->name('show');
	Route::get('/{task}/edit', 'edit')->name('edit');
	Route::patch('/{task}', 'update')->name('update');
	Route::get('/{task}/delete', 'destroy')->name('delete');
});
