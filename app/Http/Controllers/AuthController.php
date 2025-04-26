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
   
             
            $validatedData = $request->validated();
    
            
            $this->service->register($validatedData);
    
            
            return redirect('/login')->with('message', 'Inscription réussie. Vous pouvez maintenant vous connecter.');
    
        
    }
    
    public function login(LoginRequest $request)
    {
  
            $validatedData = $request->validated();   
            $this->service->login($validatedData);        
            return redirect('/')->with('message', 'connection réussie.');
    
       
    }
    public function logout(){
        $this->service->logout();
        return redirect('/');
    }
}

