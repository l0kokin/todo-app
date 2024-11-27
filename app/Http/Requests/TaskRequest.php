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
				'regex:/^[A-Za-z\s,\.!?"\'-;:_—]+$/',
			],

			'name.ka' => [
				'required',
				'string',
				'min:3',
				'regex:/^[ა-ჰ\s,\.!?"\'-;:_—]+$/',
			],

			'description.en' => [
				'required',
				'string',
				'min:3',
				'regex:/^[A-Za-z\s,\.!?"\'-;:_—]+$/',
			],

			'description.ka' => [
				'required',
				'string',
				'min:3',
				'regex:/^[ა-ჰ\s,\.!?"\'-;:_—]+$/',
			],

			'due_date' => [
				'required',
				'date',
			],
		];
	}
}
