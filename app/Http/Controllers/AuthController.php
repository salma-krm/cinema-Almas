<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\loginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Services\Interfaces\IUserService;

class AuthController extends Controller
{
    protected $user;

    public function __construct(IUserService $user)
    {
        $this->user= $user;
    }
    public function index()
    {
    }

    public function register(RegisterRequest $request)
    {
        
        $validatedData = $request->validated();
        $this->user->register($validatedData);
        return redirect('/login')->with('message', 'Inscription réussie, Connectez-vous.');
        
    }
    public function login(LoginRequest $request)
    {
       
        $validData = $request->validated();

  
        $result = $this->user->login($validData);

       
        if ($result['status'] === 'failed') {
            return redirect('/login')->with('message', $result['message']);

        }

        return redirect('/');
    }
}

