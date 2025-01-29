<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Handle Login Request
 *
 * @property-read string $email
 * @property-read string $password
 */
class MakeLoginRequest extends FormRequest
{
    public function tryToLogin()
    {
        if ($user = User::query()->where('email', $request->email)->first())
        {
            if(Hash::check($request->password, $user->password))
            {
                auth()->login($user);
            }
        }
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }
}
