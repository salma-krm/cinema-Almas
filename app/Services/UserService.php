<?php

namespace App\Services;
use App\Repositories\Interfaces\IUser;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

use App\Services\Interfaces\IUserService;

class UserService implements IUserService

{
    private  IUser $userRepository;

    public function __construct(IUser $userRepository)
    {
        $this->userRepository = $userRepository;
    }

     
    public function findByEmail($email){

    }
    public function delete($id){

    }
    public function update(array $data, $id){

    }
    public function findByName($name)
    {

    }
        
}
