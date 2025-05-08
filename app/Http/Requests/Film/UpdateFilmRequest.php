<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  // Allow all users to make the request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255|unique:films,title,' . $this->route('film'),  // Ignore the current film being updated
            'description' => 'required|string',
            'date_sortie' => 'required|date',
            'resume' => 'required|string',
            'budget' => 'required|numeric',
            'realisateur' => 'required|string',
            'duree' => 'required|numeric',
            'langue' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Photo can be nullable but must be an image if provided
            'genre_id' => 'required|exists:genres,id', // Ensure genre exists
        ];
    }

    /**
     * Get custom messages for validation errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Le titre du film est requis.',
            'title.unique' => 'Un film avec ce titre existe déjà.',
            'photo.image' => 'Le fichier photo doit être une image.',
            'photo.mimes' => 'Le fichier photo doit être au format: jpeg, png, jpg, gif, svg.',
            'photo.max' => 'Le fichier photo ne doit pas dépasser 2MB.',
        ];
    }
}
