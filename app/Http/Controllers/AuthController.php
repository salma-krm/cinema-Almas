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

    public function register(RegisterRequest $request)
    {
        
        $validatedData = $request->validated();
        $this->user->register($validatedData);
        
    }
    public function login(loginRequest $request){
        
        $validData = $request->validated();
        $this->user->login($validData);

    }
}
