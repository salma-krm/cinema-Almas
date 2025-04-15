<?php

namespace App\Services;

use app\Repositories\Interfaces\IUser;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

use App\Services\Interfaces\IUserService;

class UserService implements IUserService

{
    protected $userRepository;

    public function __construct(IUser $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(array $data)
    {
        return $this->userRepository->register($data);
    }
    public function login(array $data){
        return $this->userRepository->login($data);
    }
        
}
