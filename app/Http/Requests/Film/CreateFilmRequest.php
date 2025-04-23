<?php

namespace App\Http\Requests\Film;

use Illuminate\Foundation\Http\FormRequest;

class CreateFilmRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // If you want to add authorization logic, change this
    }

    public function rules(): array
    {
        return [
            'title'            => 'required|string|max:255',
            'description'      => 'nullable|string',
            'date_sortie'      => 'required|date',
            'resume'           => 'nullable|string',
            'budget'           => 'required|numeric|min:0',
            'realisateur'      => 'required|string|max:255',
            'duree'            => ['required', 'regex:/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/'],
            'langue'           => 'required|string|max:255',
            'photo'            => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120', 
            'age_restriction'  => 'nullable|string|max:10',
            'video'            => 'nullable|url',
            'genre'            => 'required|exists:genres,id',
            'cast'             => 'required|array',
        ];}
    public function messages()
    {
        return [
            'title.required' => 'Le titre du film est requis.',
            'description.required' => 'La description du film est requise.',
            'date_sortie.required' => 'La date de sortie est requise.',
            'resume.required' => 'Le résumé du film est requis.',
            'budget.required' => 'Le budget du film est requis.',
            'realisateur.required' => 'Le réalisateur est requis.',
            'duree.required' => 'La durée du film est requise.',
            'langue.required' => 'La langue du film est requise.',
            'photo.image' => 'L\'affiche doit être une image.',
            'photo.mimes' => 'L\'affiche doit être au format JPEG, PNG, JPG, GIF ou SVG.',
            'photo.max' => 'L\'affiche ne doit pas dépasser 5 Mo.',
            'video.string' => 'L\'URL ou le chemin de la vidéo doit être une chaîne de caractères.',
            'genre_id.exists' => 'Le genre sélectionné n\'existe pas dans la base de données.',
        ];
    }
}
