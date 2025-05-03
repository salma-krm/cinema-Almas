<?php

namespace App\Http\Controllers;

use App\Http\Requests\Film\CreateFilmRequest as RequestsCreateFilmRequest;
use App\Http\Requests\Film\CreateFilmRequest;
use App\Http\Requests\Film\deleteRequest;
use App\Http\Requests\Film\UpdateFilmRequest;
use App\Http\Requests\FilmCreateRequest;
use App\Http\Requests\FilmRequest;
use App\Http\Requests\Film\FilmStoreRequest;
use App\Http\Requests\FilmUpdateRequest;
use App\Models\Acteur;
use App\Models\Film;
use App\Models\Genre;
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

    public function getActeurGenre()
    {
        $actors =   $this->serviceActeur->getAll();
        $servicegenre = $this->servicegenre->getAll();
        return view('admindashbord.film.filmcreate', compact('actors', 'servicegenre'));
    }

    public function create(Request $request)
    {
        $validated = $request;
        $this->service->create($validated);
        return redirect('/Admin/film')->with('message', 'Film ajouté avec succès.');
    }

    public function update(Request $request)
    {
        $validated = $request;

        $this->service->update($validated);
        return redirect('/Admin/film')->with('message', 'Film modifié avec succès.');
    }


    public function delete($id)
    {
        $this->service->delete($id);
        return redirect()->back()->with('message', 'Film supprimé avec succès.');
    }


    public function getById(Request $id)
    {

        $film =  $this->service->getById($id);
        return view('', compact('film'));
    }

    public function getDetailFilm($id)
    {
        
        $film =  $this->service->getdetailfilm($id);
        $filmsSimilaires = $this->service->getAll();
        return view('detailsfilm', compact('film', 'filmsSimilaires'));
    }
    public function CustomDtail($id)
    {

        $film = $this->service->getById($id);
        return view('customdetail', compact('film'));
    }
    public function edit($id)
    {

        $film = Film::with('acteurs')->findOrFail($id);
        $genres = Genre::all();
        $actors = Acteur::all();

        return view('admindashbord.film.filmupdate', compact('film', 'genres', 'actors'));
    }

    public function search(Request $request)
    {
        $title = $request->query('query');
        $genre = $request->query('genre');

       
        $films = Film::where('title', 'like', '%' . $title . '%');

        if ($genre) {
            $films->where('genre_id', $genre);
        }
        $films = $films->get();
        return view('components.films', compact('films'));
    }




}
