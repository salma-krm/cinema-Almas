<?php

namespace App\Http\Controllers;
use App\Http\Requests\User\loginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Services\Interfaces\IAuthService;
use App\Services\Interfaces\IUserService;
use Exception;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private IUserService $service;

    public function __construct(IUserService $service)
    {
        $this->service = $service;
    }
    public function getAll(){
       $users =  $this->service->getAll();
    //    dd($users);
        return view('admindashbord.user.userdashbord',compact('users'));

    }
       public function getUser()
      {
        
         $user  = $this->service->getUser();
      if (!$user) {
                return redirect('/login')->with('error', 'Veuillez vous connecter.');
            }
        
            return view('dashbord',compact('user'));
    }
    public function update(UpdateUserRequest $request)
    {
    //    dd($request);
        $validatedData = $request->validated(); 
        // dd($validatedData);
        $this->service->update($validatedData);
        return back()->with('message', 'updated  avec succès.');
    }
        
    }

   


