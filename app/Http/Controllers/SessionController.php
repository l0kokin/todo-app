<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
	public function create()
	{
		Route::view('/', 'home');
	}

	public function store(LoginRequest $request)
	{
		$attributes = $request->validated();

		if (!Auth::attempt($attributes)) {
			throw ValidationException::withMessages([
				'email'       => ' ',
				'password'    => 'Sorry, those credentials do not match.',
			]);
		}

		request()->session()->regenerate();
		return redirect()->route('tasks.index');
	}

	public function destroy()
	{
		Auth::logout();
		return redirect()->route('home');
	}
}
