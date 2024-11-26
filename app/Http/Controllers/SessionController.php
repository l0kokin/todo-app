<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
	public function create()
	{
		return view('home');
	}

	public function store()
	{
		$attributes = request()->validate([
			'email'    => ['required', 'email'],
			'password' => ['required', 'min:4'],
		]);

		if (!Auth::attempt($attributes)) {
			throw ValidationException::withMessages([
				'email'       => ' ',
				'password'    => 'Sorry, those credentials do not match.',
			]);
		}

		request()->session()->regenerate();
		return redirect('/tasks');
	}

	public function destroy()
	{
		Auth::logout();
		return redirect('/');
	}
}
