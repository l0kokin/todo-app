<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'name_en' => [
				'required',
				'string',
				'min:3',
				'regex:/^[a-zA-Z\s]+$/',
			],
			'name_ka' => [
				'required',
				'string',
				'min:3',
				'regex:/^[ა-ჰ\s]+$/',
			],
			'description_en' => [
				'required',
				'string',
				'min:3',
				'regex:/^[a-zA-Z\s]+$/',
			],
			'description_ka' => [
				'required',
				'string',
				'min:3',
				'regex:/^[ა-ჰ\s]+$/',
			],
			'dueDate' => 'required|date',
		];
	}
}
