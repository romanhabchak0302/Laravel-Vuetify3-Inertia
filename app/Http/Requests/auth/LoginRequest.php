<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;

final class LoginRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'email' => [
				'required',
				'email'
			],
      'password' => ['required']
		];
	}
}
