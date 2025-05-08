<?php

namespace App\Http\Requests\Seance;

use Illuminate\Foundation\Http\FormRequest;

class CreateSeanceRequest extends FormRequest
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
           'horaire' =>'required',
           'salle_id'=>'required',
           'film_id'=>'required',
        ];
    }
    public function message(){
        return [
            'name.required' => 'Le nom est obligatoire.',
            'salle_id.required' => 'selectionner film est obligatoire.',
            'film_id.required' => 'selectionner salle est obligatoire.',
            
        ];
    }
}
