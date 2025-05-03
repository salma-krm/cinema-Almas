<?php
namespace App\Http\Controllers;
use App\Services\Interfaces\IPaiementService;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    private IPaiementService $iPaiementService;
    
    public function __construct(IPaiementService $iPaiementService)
    {
        $this->iPaiementService = $iPaiementService;
     
    }
    public function success()
    {
        return  $this->iPaiementService->success(); 
    }
    public function session(){
       
       
        return $this->iPaiementService->session();
    }

    public function AjouterPanier( request $request)
    {
         $this->iPaiementService->AjouterPanier($request);
         return redirect('/show/panier');

    }
    public function getPanier(){
        $panier =  $this->iPaiementService->getPanier();
        return view('panier',compact('panier'));
    }
    public function deletePanier($id){
       
        $this->iPaiementService->deletPanier($id);
        return redirect('/show/panier')->with('success', 'Le ticket a été supprimé ');
   }
}
