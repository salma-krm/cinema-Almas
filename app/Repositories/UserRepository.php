<?php

namespace App\Repositories;

use App\Enums\Image; // Should use correct casing for enum class
use App\Models\Role;
use App\Enums\Roles;
use App\Models\User;
use App\Repositories\Interfaces\IRole;
use App\Repositories\Interfaces\IUser;
use Exception;
use Illuminate\Support\Facades\Session;
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
        $user =  User::where('id', '=', $id)->first();
        $user->delete();
    }
    public function findByName($name)
    {
        return User::where('name', 'LIKE', "%$name%")->first();
    }


    public function save($data){
         $data->save();
    }
    public function getUser(){
        $user = Auth()->user();
        $useremail = $user->email;
        $getuser = $this->findByEmail($useremail);
        return $getuser;
    }
    public function update($data){
        $data->update();
    }
    public function getAll(){
        return User::all();
    }
    }

