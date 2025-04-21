<?php

namespace App\Http\Controllers;
use App\Http\Requests\User\loginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Services\Interfaces\IAuthService;
use Exception;

class AuthController extends Controller
{
    private IAuthService $service;

    public function __construct(IAuthService $service)
    {
        $this->service = $service;
    }
  

    public function register(RegisterRequest $request)
    {
        try {
             
            $validatedData = $request->validated();
    
            
            $this->service->register($validatedData);
    
            
            return redirect('/login')->with('message', 'Inscription réussie. Vous pouvez maintenant vous connecter.');
    
        } catch (Exception $e) {
            
            return redirect('/register')

                ->with('error', $e->getMessage()); 
        }
    }
    
    public function login(LoginRequest $request)
    {
       
        try {
             
            $validatedData = $request->validated();
    
            
            $this->service->login($validatedData);
    
            
            return redirect('/')->with('message', 'connection réussie.');
    
        } catch (Exception $e) {
            
            return redirect('/login')->with('error', $e->getMessage()); 
        }


  
        

       
       

        return redirect('/');
    }
}

