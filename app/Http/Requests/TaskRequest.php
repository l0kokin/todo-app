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

	public function messages(): array
	{
		return [
			'name.en.required'        => 'Name is required.',
			'name.en.min'             => 'Name must be at least 3 characters.',
			'name.en.regex'           => 'Name must only contain latin letters.',
			'name.ka.required'        => 'Name is required.',
			'name.ka.min'             => 'Name must be at least 3 characters.',
			'name.ka.regex'           => 'Name must only contain Georgian letters.',
			'description.en.required' => 'Description is required.',
			'description.en.min'      => 'Description must be at least 3 characters.',
			'description.en.regex'    => 'Description must only contain latin letters.',
			'description.ka.required' => 'Description is required.',
			'description.ka.min'      => 'Description must be at least 3 characters.',
			'description.ka.regex'    => 'Description must only contain Georgian letters.',
			'due_date.required'       => 'The due date is required.',
			'due_date.date'           => 'The due date must be a valid date.',
		];
	}
}
