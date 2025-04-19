<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'required|exists:roles,id',
            'name' => 'required|string|max:255|unique:roles,name,' . $this->id,
        ];
    }

    public function messages()
    {
        return [
            'id.required' => "L'identifiant du rôle est manquant.",
            'id.exists' => "Ce rôle n'existe pas.",
            'name.required' => 'Le nom du rôle est requis.',
            'name.unique' => 'Ce nom de rôle est déjà utilisé.',
        ];
    }
}
