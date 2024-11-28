<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SessionController extends Controller
{
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

	public function updateLocale(Request $request)
	{
		$locale = $request->input('locale');

		session()->put('locale', $locale);
		App::setLocale($locale);

		return redirect()->back();
	}
}
