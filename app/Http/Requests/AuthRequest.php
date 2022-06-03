<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'documento' => ['required', 'unique:usuarios,IdUsuario'],
            'nombre' => 'required',
            'correo' => ['required', 'unique:usuarios,Correo'],
            'contrasenna' => 'required',
            'ccontrasenna' => 'required',
            'boletin' => 'required',
        ];
    }
}
