<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\User;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('POST')) {
            return [
                'name' => 'required|string',
                'email' => 'required|email|unique:Users,email',
                'password' => 'required',
                'cpf' => 'required|string|unique:Users,cpf',
                'birth' => 'required|string',
                'phone' => 'required|string',
                'image' => 'string|nullable',
            ];
        }

        if ($this->isMethod('PUT')) {
            return null;
        }   
    }

    public function massages()
    {
        return [
        'name.required' => 'O nome não pode ser nulo',
        'email.required' => 'O email não pode ser nulo',
        'email.email' => 'O email não está no formato correto',
        'email.unique' => 'Este email já esta sendo utilizado',
        'password.required' => 'A senha não pode ser nula.',
        'cpf.required' => 'O cpf não pode ser nulo',
        'cpf.unique' => 'Este cpf já esta sendo utilizado',
        'birth.required' => 'A data de nascimento não pode ser',
        'phone.required' => 'O telefone não pode ser nulo'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(),422));
    }
}
