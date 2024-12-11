<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
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
		session()->regenerate();

		return redirect()->route('home');
	}

	public function updateLocale(Request $request)
	{
		$locale = $request->input('locale');

		session()->put('locale', $locale);
		App::setLocale($locale);

		return redirect()->back();
	}

	public function update(ProfileRequest $request)
	{
		$validated = $request->validated();

		/**
		 * @var \App\Models\User $user
		 */
		$user = Auth::user();

		if ($request->hasFile('profile_picture')) {
			$profilePicturePath = $request->file('profile_picture')->store('images/profile_pictures', 'public');
			$user->profile_picture = $profilePicturePath;
		}

		if ($request->hasFile('cover_photo')) {
			$coverPhotoPath = $request->file('cover_photo')->store('images/cover_photos', 'public');
			User::query()->update(['cover_photo' => $coverPhotoPath]);
		}

		$user->update([
			'email'    => $validated['email'],
			'password' => $validated['new_password']
				? bcrypt($validated['new_password'])
				: $user->password,
		]);

		return redirect()->route('home');
	}
}
