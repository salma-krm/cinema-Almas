<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IGenreService;
use Illuminate\Http\Request;
use Exception;

class GenreController extends Controller
{
    protected IGenreService $genre;

    public function __construct(IGenreService $genre)
    {
        $this->genre = $genre;
    }

    public function getAll()
    {
        $genres = $this->genre->show();
        return view('admindashbord.genre.genredashbord', compact('genres'));
    }

    public function create(Request $request)
    {

        $validated = $request;

        try {
            $this->genre->create($validated);
            return back()->with('message', 'Genre created successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $this->genre->update($request);
            return redirect('Admin/genre')->with('message', 'Genre updated successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        $this->genre->delete($id);
        return redirect('Admin/genre')->with('message', 'Genre deleted.');
    }

    public function getById($id)
    {
        $genre = $this->genre->getById($id);

        if (!$genre) {
            return redirect()->route('genre.index')->with('error', 'Genre not found.');
        }

        return view('admindashbord.genre.genreupdate', compact('genre'));
    }
}
