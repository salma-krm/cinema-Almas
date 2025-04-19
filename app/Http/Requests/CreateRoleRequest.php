<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRoleRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:roles,name',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le nom du rôle est requis.',
            'name.unique' => 'Ce rôle existe déjà.',
        ];
    }
}
