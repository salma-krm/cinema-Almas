<?php

namespace App\Repositories;

use App\Models\Role;
use App\Models\User;
use App\Repositories\Interfaces\IUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository implements IUser
{
    public function register(array $data)
    {
        $existingUser = $this->findByEmail($data['email']);
        if ($existingUser) {
            return redirect('/register')->with('message');
        }
    
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();
    
        $role = Role::where('name', 'LIKE', '%client%')->first();
        if ($role) {
            $user->roles()->attach($role->id); 
        }
    
        return redirect('/login')->with('message', 'inscription reussie, Connectez-vous.');
    }
    

    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    

    public function login(array $data){
        $user = User::where('email', $data['email'])->first();
        if (!$user || !Hash::check($data['password'], $user->password)){
            return redirect('/')->with('message');

        }else{
            return redirect('/')->with('message','connecte reussite');
        }

    }

    public function delete($data)
    {
        DB::table('users')->where('id', $data->id)->delete();
    }


    public function update(array $data, $id)
    {
        return User::where('id', $id)->update($data);
    }

    public function findByName($name)
    {
        return User::where('name', 'LIKE', "%$name%")->get();
    }
}
