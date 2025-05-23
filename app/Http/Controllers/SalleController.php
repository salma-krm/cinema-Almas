<?php

namespace App\Http\Controllers;

use App\Http\Requests\Salle\UpdateSalleRequest;
use App\Http\Requests\Salle\CreateSalleRequest;
use App\Services\Interfaces\ISalleService;
use Exception;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    protected $salle;

    public function __construct(ISalleService $salle)
    {
        $this->salle = $salle;
    }

    public function index()
    {
        $salles = $this->salle->show();
       
        return view('admindashbord.salledashbord', compact('salles'));
    }

    public function create(CreateSalleRequest $request)
    {
       
        $validatedData = $request->validated();

        try {
            $this->salle->create($validatedData);
            return redirect('/salle')->with('message', 'Salle created successfully');
        } catch (Exception $e) {
            return redirect('/salle')->with('message', $e->getMessage());
        }
    }

    public function update(UpdateSalleRequest $request)
    {     
         
        $validatedData = $request->validated();
        try {

            $this->salle->update($validatedData);

            return redirect('/salle')->with('message', 'Salle updated successfully');
        } catch (Exception $e) {
            return redirect('/salle')->with('error', $e->getMessage());
        }
    }

    public function getById($id)
    {
        $Salles = $this->salle->findById($id);

        if (!$Salles) {
            return back()->with('error', 'Salle not found!');
        }

        return view('admindashbord.salleUpdate', compact('Salles'));
    }

    public function delete($id)
    {
        $this->salle->delete($id);
        return back()->with('message', 'Salle deleted');
    }
}
