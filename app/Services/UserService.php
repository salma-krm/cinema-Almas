<?php

namespace App\Services;

use App\Exceptions\CustomException\InCompleteProcess;
use App\Models\User;
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
//  dd($path);
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

    }
    public function getAll(){
      return  $this->userRepository->getAll();
    }
}
