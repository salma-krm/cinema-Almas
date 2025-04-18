<?php

namespace App\Http\Controllers;
use App\Services\Interfaces\IActeurService;
use Illuminate\Http\Request;
use Exception;

class ActeurController extends Controller
{
    protected IActeurService $acteur;

    public function __construct(IActeurService $acteur)
    {
        $this->acteur = $acteur;
    }

    public function getAll(){
        $acteur = $this->acteur->show();
        
        return view('admindashbord.acteur.acteurdashbord', compact('acteur'));
    }

    public function create(Request $request)
    {

        $validated = $request;

        try {
            $this->acteur->create($validated);
            return back()->with('message', 'Genre created successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $this->acteur->update($request);
            return redirect('Admin/acteur')->with('message', 'Genre updated successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        $this->acteur->delete($id);
        return redirect('Admin/acteur')->with('message', 'Genre deleted.');
    }

    public function getById($id)
    {
        $acteur = $this->acteur->getById($id);

        if (!$acteur) {
            return redirect()->route('acteur.index')->with('error', 'Genre not found.');
        }

        return view('admindashbord.acteur.acteurupdatre', compact('genre'));
    }
}
