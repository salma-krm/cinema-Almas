<?php

namespace App\Services;

use App\Enums\image;
use App\Enums\Roles;
use App\Exceptions\CustomException\InCompleteProcess;
use App\Models\User;
use App\Repositories\Interfaces\IRole;
use App\Repositories\Interfaces\IUser;
use App\Services\Interfaces\IAuthService;
use Illuminate\Support\Facades\Auth;
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
            throw new InCompleteProcess('Email or password is incorrect.');
        }

        if (!Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            throw new InCompleteProcess('Failed to authenticate user.');
        }

        return [
            'user' => auth()->user(),
        ];
    }
   
    
    public function register($data)
    {
        $existingUser = $this->repository->findByEmail($data['email']);


        if ($existingUser) {
            throw new InCompleteProcess('User already exists with this email.');
        }

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->photo = 'users/user_11111111111111.jpg';

        $role = $this->roleRepo->findByName(Roles::CLIENT);

        if ($role) {
            $user->roles()->associate($role);
        } else {
            throw new InCompleteProcess("Role does not exist.");
        }

        $this->repository->save($user);
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
    }
}

