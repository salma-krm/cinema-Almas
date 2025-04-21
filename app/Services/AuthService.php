<?php

namespace App\Services;

use App\Enums\image;
use App\Enums\Roles;
use App\Models\User;
use App\Repositories\Interfaces\IRole;
use App\Repositories\Interfaces\IUser;
use App\Services\Interfaces\IAuthService;
use Exception;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthService implements IAuthService
{
    private IUser $repository;
    private IRole $roleRepo;

    public function __construct(IUser $repository,IRole $roleRepo)
    {
        $this->repository = $repository;
        $this->roleRepo = $roleRepo;
    }

    public function login($data)
    {
        $existingUser = $this->repository->findByEmail($data['email']);
    
        if (!$existingUser || !Hash::check($data['password'], $existingUser->password)) {
            throw new Exception('Email or password is incorrect.');
        }
    
        
        session([
            'user' => [
                'id' => $existingUser->id,
                'name' => $existingUser->name,
                'email' => $existingUser->email,
                'password' =>$existingUser->password,
                'photo' => $existingUser->photo
            ]
        ]);
        return $existingUser;
    }
   
    
    public function register($data)
    {

        $existingUser = $this->repository->findByEmail($data['email']);


        if ($existingUser) {
            throw new Exception('User already exists with this email.');
        }

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->photo = image::Profile;

        $role = $this->roleRepo->findByName(Roles::CLIENT);

        if ($role) {
            $user->roles()->associate($role);
        } else {
            throw new Exception("Role does not exist.");
        }

        $this->repository->save($user);
    }
    public function logout()
    {
        Session::forget('user');
    }
}

