<?php

namespace App\Services;

use App\Exceptions\CustomException\InCompleteProcess;
use App\Models\User;
use app\Repositories\Interfaces\IReservation;
use App\Repositories\Interfaces\IRole;
use App\Repositories\Interfaces\IUser;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

use App\Services\Interfaces\IUserService;

class UserService implements IUserService

{
    private  IUser $userRepository;
    private IRole $roleRepository;


    public function __construct(IUser $userRepository,IRole $roleRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
 

    }
    public function getUser()
    {
       return $this->userRepository->getUser();
         
        

    }
   
    public function update($data)
{
   
    $user = auth()->user();
    if (!$user) {
        throw new InCompleteProcess('User not authenticated.');
    }
   
    if (!Hash::check($data['password'], $user->password)) {
        throw new InCompleteProcess('Current password is incorrect.');
    } 
    if (isset($data['photo'])) {
        $photo = $data['photo'];
        $fileName = 'user_' . time() . '.' . $photo->getClientOriginalExtension();
        $path = $photo->storeAs('users', $fileName, 'public');
        $user->photo = $path;
    }
    $user->name = $data['name'] ?? $user->name;
    $user->email = $data['email'] ?? $user->email;
    if (isset($data['new_password'])) {
        $user->password = Hash::make($data['new_password']);
    }
    $this->userRepository->update($user);
}

    public function findByName($name) {}
    public  function findByEmail($email)
    {
        return  $this->userRepository->findByEmail($email);
    }

    public function delete($id) 
    {
    $this->userRepository->delete($id);
    

    }
    public function getAll(){
      return  $this->userRepository->getAll();
    }
    public function updateRole($data) {
       
        $user = $this->userRepository->getById($data['id']);
        if (!$user) {
            throw new InCompleteProcess('User not found.');
        }

        $role = $this->roleRepository->findByName($data['role']);
        if (!$role) {
            throw new InCompleteProcess('Role name not found.');
        }

        $user->roles()->associate($role);
        $this->userRepository->update($user);
    }

    }

