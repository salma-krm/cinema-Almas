<?php

namespace App\Http\Controllers;

use App\Http\Requests\Salle\UpdateSalleRequest;
use App\Http\Requests\User\CreateSalleRequest;
use app\Services\Interfaces\ISalleService;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    protected $salle;
    public function index(){
       

    }
   
    public function __construct(  ISalleService $salle)
    {
        $this->salle = $salle;
    }
    public function create(CreateSalleRequest $request){
     
    
            $validatedData = $request->validated(); 
    
        
            $salle = $this->salle->create($validatedData);
    
            return response()->json([
                'message' => 'Salle created ',
                'salle' => $salle,
            ], 201);
        }
        public function update(UpdateSalleRequest $request, $id)
        {
            $validatedData = $request->validated();
    
            $salle = $this->salle->update($id, $validatedData);
            
            return response()->json([
                'message' => 'Salle updated ',
                'salle' => $salle,
            ], 200);
        }
        public function delete($id){

            $this->salle->delete($id);
        }
    }
      
