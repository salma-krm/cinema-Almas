<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\IGenreService;
use Illuminate\Http\Request;
use Exception;

class GenreController extends Controller
{
    protected $genre;

    public function __construct(IGenreService $genre)
    {
        $this->genre = $genre;
    }

    public function index()
    {
        $genres = $this->genre->show();
        return view('admindashbord.genredashbord', compact('genres'));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        try {
            $this->genre->create($validated);
            return back()->with('message', 'Genre created successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string|max:255'
        ]);

        try {
            $this->genre->update($validated);
            return redirect()->route('genre.index')->with('message', 'Genre updated successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        $this->genre->delete($id);
        return redirect()->route('genre.index')->with('message', 'Genre deleted.');
    }

    public function getById($id)
    {
        $genre = $this->genre->getById($id);

        if (!$genre) {
            return redirect()->route('genre.index')->with('error', 'Genre not found.');
        }

        return view('admindashbord.genreUpdate', compact('genre'));
    }
}
