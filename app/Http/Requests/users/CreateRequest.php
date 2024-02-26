<?php

namespace App\Http\Requests\users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User;

final class CreateRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name' => ['required', 'string', 'max:255'],
			'email' => [
				'required',
				'string',
				'email',
				'max:255',
				Rule::unique(User::class),
			]
		];
	}
}
