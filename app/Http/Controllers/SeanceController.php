<?php

namespace App\Http\Controllers;

use App\Http\Requests\Seance\CreateSeanceRequest;
use App\Http\Requests\Seance\UpdateSeanceRequest;
use App\Services\Interfaces\IFilmService;
use App\Services\Interfaces\ISalleService;
use App\Services\Interfaces\ISeanceService;

// use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    private ISeanceService $serviceSeance;
    private IFilmService $servicefilm;
    private ISalleService $servicesalle;

    public function __construct(ISeanceService $serviceSeance, IFilmService $servicefilm, ISalleService $servicesalle)
    {
        $this->serviceSeance = $serviceSeance;
        $this->servicefilm = $servicefilm;
        $this->servicesalle = $servicesalle;
    }
    public function getAll()
    {
        $seances =  $this->serviceSeance->getAll();
       
        return view ('admindashbord.seance.seancedashbord',compact('seances'));
    }

    public function getFilmSalle()
    {
        $films = $this->servicefilm->getAll();
        $salles = $this->servicesalle->show();
        return view('admindashbord.seance.seancecreate', compact('films', 'salles'));
    }

    public function create(CreateSeanceRequest $request)
    {
        $this->serviceSeance->create($request->validated());
        return redirect('/seance/dashbord')->with('message', 'seance created successfully');;
    }

    public function update(request $request){
        $this->serviceSeance->update($request);
        return redirect('/seance/dashbord')->with('message', 'seance updated successfully');;

    }
    public function getSalle($id){
        $seance =  $this->serviceSeance->getById($id);
        $films = $this->servicefilm->getAll();
        $salles = $this->servicesalle->show();
          return view('admindashbord.seance.seanceupdate', compact('films', 'salles','seance'));  
    }
    public function delete($id){
        $this->serviceSeance->delete($id);
        return redirect('/seance/dashbord')->with('message', 'seance deleted successfully');;
    }

    public function bookTicket($id){
        $seance =  $this->serviceSeance->getById($id);
        return view ('ticket',compact('seance'));
    }
 


}
