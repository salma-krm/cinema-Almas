<?php

namespace App\Http\Controllers;

use App\Services\AvisService;
use App\Services\Interfaces\IAvisService;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class AvisController extends Controller
{
    private IAvisService $avisService;
    
    public function __construct( IAvisService $avisService)
    {
        $this->avisService = $avisService;
    }
    public function create( Request $request)
    {
           $this->avisService->create($request);
           return back();
    }
    public function update( Request $request){
       
        $this->avisService->update($request);
        return back();
    }
    public function delete ($id){
        $this->avisService->delete($id);
        return back();
    }
}
