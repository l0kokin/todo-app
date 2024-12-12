<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

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
			$coverPhotoFolder = 'images/cover_photos';
			$coverPhotoName = 'user_cover';

			$files = Storage::files('public/' . $coverPhotoFolder);
			foreach ($files as $file) {
				Storage::delete($file);
			}

			$request->file('cover_photo')->storeAs($coverPhotoFolder, $coverPhotoName, 'public');
		}

		$user->update([
			'email'    => $validated['email'],
			'password' => $validated['new_password']
			? bcrypt($validated['new_password'])
				: $user->password,
		]);

		if ($validated['email'] !== $user->email || !empty($validated['new_password'])) {
			Auth::logout();
			session()->regenerate();
			return redirect()->route('home');
		}

		return redirect()->route('profile');
	}
}
