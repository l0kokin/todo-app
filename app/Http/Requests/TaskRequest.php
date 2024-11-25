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
			'name.en' => [
				'required',
				'string',
				'min:3',
				'regex:/^[a-zA-Z\s,\.!?"\'-]+$/',
			],

			'name.ka' => [
				'required',
				'string',
				'min:3',
				'regex:/^[ა-ჰ\s,\.!?"\'-]+$/',
			],

			'description.en' => [
				'required',
				'string',
				'min:3',
				'regex:/^[a-zA-Z\s,\.!?"\'-]+$/',
			],

			'description.ka' => [
				'required',
				'string',
				'min:3',
				'regex:/^[ა-ჰ\s,\.!?"\'-]+$/',
			],

			'due_date' => [
				'required',
				'date',
			],
		];
	}
}
