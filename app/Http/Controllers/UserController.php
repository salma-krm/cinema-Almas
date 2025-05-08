<?php

namespace App\Http\Controllers;
use App\Http\Requests\User\loginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Services\Interfaces\IAuthService;
use App\Services\Interfaces\IRoleService;
use App\Services\Interfaces\IUserService;
use Exception;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private IUserService $service;
    private IRoleService $roleserivce;

     public function __construct(IUserService $service,IRoleService $roleserivce)
    {
        $this->service = $service;
        $this->roleserivce = $roleserivce;
    }
      public function getAll(){
       $users =  $this->service->getAll();
       $roles = $this->roleserivce->getAll();

        return view('admindashbord.user.userdashbord',compact('users','roles'));

     }
       public function getUser()
      {
        
         $user  = $this->service->getUser();
       
      if (!$user) {
                return redirect('/login')->with('error', 'Veuillez vous connecter.');
            }
        
            return view('dashbord',compact('user'));
      }
       public function update( UpdateUserRequest $request)
      {

      
        $validatedData = $request->validated(); 
        $this->service->update($validatedData);
        return back()->with('message', 'updated  avec succès.');
      }
      public function updateRole(HttpRequest $request){
        
        $this->service->updateRole($request);
        return back();
      }
      public function delete ($id){
        
        $this->service->delete($id);
        return back();
      }
      public function InActivateAcounte ($id){
        
        $this->service->delete($id);
        Auth::logout();
        request()->session()->invalidate();
        return redirect('/');
      }
      
        
    }

   


