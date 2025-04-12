<?php
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Services\Interfaces\IUserService;
use App\Services\UserService;

class UserController extends Controller
{
    protected $user;

    public function __construct(  IUserService $user)
    {
        $this->user = $user;
    }

    public function register(RegisterRequest $request) 
    {
      

        $validatedData = $request->validated(); 

    
        $user = $this->user->register($validatedData);

        return response()->json([
            'message' => 'User registered ',
            'user' => $user,
        ], 201);
    }

    public function login(){}
}

