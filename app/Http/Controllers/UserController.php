<?php

namespace App\Http\Controllers;
use App\Http\Requests\User\loginRequest;
use App\Http\Requests\User\RegisterRequest;
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
       public function getAll()
    {
        $user = Session::get('user');
       
  
$getUser = $this->service->findByEmail($user["email"]) ;



if (!$getUser) {
                return redirect('/login')->with('error', 'Veuillez vous connecter.');
            }
        
            return view('dashbord',compact('getUser'));
        }
        
    }

   


