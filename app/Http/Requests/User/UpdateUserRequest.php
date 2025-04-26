<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'email' => 'required',  
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password'=>'required',
            'new_password' => 'nullable|string|min:8',
            'confirm_password' => 'same:new_password',
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
            'new_password.min' => 'Le mot de passe doit comporter au moins 8 caractères.',
            'confirm_password.same' => 'Les mots de passe ne correspondent pas.',
        ];
    }
}
