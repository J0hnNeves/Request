<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
{
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
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'remember_me' => 'boolean',
            'login_attempts' => 'required|integer|min:0',
            'device_id' => 'required|string',
            'ip_address' => 'required|string|ip',
            'login_time' => 'required|date',
        ];
    }


    public function messages()
    {
        return [
            'email.required' => 'O e-mail é obrigatório.',
            'password.required' => 'A senha é obrigatória.',
            'remember_me.boolean' => 'O valor deve ser verdadeiro ou falso.',
            'login_attempts.required' => 'O número de tentativas de login é obrigatório.',
            'device_id.required' => 'O ID do dispositivo é obrigatório.',
            'ip_address.required' => 'O endereço IP é obrigatório.',
            'login_time.required' => 'O horário de login é obrigatório.',
        ];
    }
}
