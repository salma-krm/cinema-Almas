<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash; // ← Nécessaire pour vérifier le mot de passe

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' =>  'required',
            'photo' => 'image|max:2048',
            'password' => 'required|string|min:8', 
            'new_password' => 'nullable|string|min:8',
            'confirm_password' => 'required_with:new_password|same:new_password',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'Veuillez entrer un email valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'photo.image' => 'Le fichier doit être une image.',
            'photo.mimes' => 'L\'image doit être de type : jpeg, png, jpg, gif, svg.',
            'photo.max' => 'L\'image ne doit pas dépasser 2 Mo.',
            'new_password.min' => 'Le nouveau mot de passe doit comporter au moins 8 caractères.',
            'confirm_password.same' => 'Les mots de passe ne correspondent pas.',
            'confirm_password.required_with' => 'Veuillez confirmer le nouveau mot de passe.',
            'password.required' => 'Le mot de passe actuel est obligatoire.',
        ];
    }
}
