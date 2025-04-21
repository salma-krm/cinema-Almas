<?php

namespace App\Http\Controllers;

use App\Http\Requests\Film\deleteRequest;
use App\Http\Requests\Film\UpdateFilmRequest;
use App\Http\Requests\FilmCreateRequest;
use App\Http\Requests\FilmRequest;
use App\Http\Requests\FilmUpdateRequest;
use App\Models\Film;
use App\Services\Interfaces\IActeurService;
use App\Services\Interfaces\IAuthService;
use App\Services\Interfaces\IFilmService;
use App\Services\Interfaces\IGenreService;
use Exception;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    private IFilmService $service;
    private IActeurService $serviceActeur;
    private IGenreService $servicegenre;

    public function __construct(IFilmService $service, IActeurService $acteur, IGenreService $genre)
    {
        $this->service = $service;
        $this->serviceActeur = $acteur;
        $this->servicegenre = $genre;
    }

    public function getAll()
    {
        $films =  $this->service->getAll();
        return view('home', compact('films'));
    }
    public function index()
{
    $films =  $this->service->getAll();
    return view('admindashbord.film.filmdashbord', compact('films'));
}

    
    public function getActeurGenre(){
       $actors =   $this->serviceActeur->getAll();
       $servicegenre = $this->servicegenre->getAll();
       return view('admindashbord.film.filmcreate',compact('actors','servicegenre'));



    }

    public function create(request $request)
    {
       
         
        try {
            $validated = $request;
            $this->service->create($validated);
            return redirect()->back()->with('message', 'Film ajouté avec succès.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(FilmUpdateRequest $request)
    {
        try {
            $validated = $request->validated();
            $this->service->update($validated);
            return redirect()->back()->with('message', 'Film modifié avec succès.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function delete(deleteRequest $deleteRequest)
    {
        try {
            $this->service->delete($deleteRequest);
            return redirect()->back()->with('message', 'Film supprimé avec succès.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
