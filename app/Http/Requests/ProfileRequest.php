<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'email'                           => ['required', 'email'],
			'current_password'                => ['required', 'current_password'],
			'new_password'                    => ['required', 'min:4', 'confirmed'],
			'profile_picture'                 => ['nullable', 'image', 'max:2048'],
			'cover_photo'                     => ['nullable', 'image', 'max:2048'],
		];
	}
}
