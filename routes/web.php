<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/tasks/create', 'tasks.create')->name('tasks.create')->middleware('auth');

Route::middleware('auth')->controller(SessionController::class)->group(function () {
	Route::view('/profile', 'profile')->name('profile');
	Route::patch('/profile{user}', 'update')->name('profile.update');
});

Route::post('/login', [SessionController::class, 'store'])->name('session.store');
Route::get('/login', [SessionController::class, 'create'])->name('session.create');
Route::get('/logout', [SessionController::class, 'destroy'])->name('session.destroy');
Route::put('/locale', [SessionController::class, 'updateLocale'])->name('session.locale');

Route::middleware('auth')->prefix('tasks')->name('tasks.')->controller(TaskController::class)->group(function () {
	Route::get('/', 'index')->name('index');
	Route::get('/due', 'dueTasks')->name('due');
	Route::post('/', 'store')->name('store');
	Route::get('/delete', 'destroyOld')->name('delete.old');
	Route::get('/{task}', 'show')->name('show');
	Route::get('/{task}/edit', 'edit')->name('edit');
	Route::patch('/{task}', 'update')->name('update');
	Route::get('/{task}/delete', 'destroy')->name('delete');
});
