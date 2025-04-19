<?php

namespace App\Http\Requests\Salle;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSalleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id'=>"required",
            'name' => 'required', 
            'capacite' => 'required',  
            'status' => 'required', 
            'maintenance_notes' => 'required',  
            'type' => 'required', 
            'description' => 'required',  
            'equipment' => 'required', 
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le nom est obligatoire.',
            'name.unique' => 'Ce nom existe déjà.',
            'capacite.required' => 'La capacité est obligatoire.',
            'capacite.integer' => 'La capacité doit être un nombre entier.',
            'capacite.min' => 'La capacité doit être un nombre positif.',
            'status.required' => 'Le statut est obligatoire.',
            'status.in' => 'Le statut doit être "disponible", "en séance" ou "maintenance".',
            'type.required' => 'Le type est obligatoire.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'equipment.string' => 'L\'équipement doit être une chaîne de caractères.',
        ];
    }
}
