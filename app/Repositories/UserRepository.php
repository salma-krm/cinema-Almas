<?php

namespace App\Repositories;

use App\Enums\Image; // Should use correct casing for enum class
use App\Models\Role;
use App\Enums\Roles;
use App\Models\User;
use App\Repositories\Interfaces\IRole;
use App\Repositories\Interfaces\IUser;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository implements IUser
{
    
    public function getById($id){
        return User::find($id);
    }

    public function getRole($name)
    {
        return Role::where('name', '=', $name)->first();
    }

    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    
    public function delete($id)
    {
        User::delete($id);
    }
    public function findByName($name)
    {
        return User::where('name', 'LIKE', "%$name%")->get();
    }
    

    public function save($data){
         $data->save();
    }
}
