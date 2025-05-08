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

    public function getAll()
    {
       
        $acteur = $this->acteur->show();
        // dd($acteur);
        return view('admindashbord.acteur.acteurdashbord', compact('acteur'));
    }

    public function create(Request $request)
    {
        $validated = $request->all();

        try {
            $this->acteur->create($validated);
            return redirect('/acteur')->with('message', 'Acteur created successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $this->acteur->update($request->all());
            return redirect('/acteur')->with('message', 'Acteur updated successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        $this->acteur->delete($id);
        return redirect('/acteur')->with('message', 'Acteur deleted.');
    }

    public function getById($id)
    {
        $actor = $this->acteur->getById($id);

        if (!$actor) {
            
            return redirect('Admin/acteur')->with('error', 'Acteur not found.');
        }
        
        return view('admindashbord.acteur.acteurupdate', compact('actor'));
    }
}
