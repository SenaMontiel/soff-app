<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellidos' => 'required',
            'numero_cedula' => 'required|unique:users,numero_cedula',
            'rol' => 'required',
            'edad' => 'required',
            'contraseña' => 'required|min:8',
        ];
    }
}
