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
    public function register(array $data)
    {
        $clientRole = Roles::CLIENT;
        $existingUser = $this->findByEmail($data['email']);

        
        if ($existingUser) {
            return redirect('/register')->with('message', 'User already exists with this email.');
        }

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->photo = Image::Profile;

        $role = $this->getRole($clientRole);

        if ($role) {
            $user->roles()->associate($role);
        } else {
            throw new Exception("Role does not exist.");
        }

        $user->save();
    }

    public function getRole($name)
    {
        return Role::where('name', '=', $name)->first();
    }

    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    public function login(array $data)
    {
        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            return [
                'status' => 'failed',
                'message' => 'Email or password is incorrect.'
            ];
        }
        return [
            'status' => 'success'
        ];
    }

    public function delete($data)
    {

        $user = User::find($data->id);
        if ($user) {
            $user->delete();
        } else {
            throw new Exception("User not found.");
        }
    }

    public function update(array $data, $id)
    {

        $user = User::find($id);
        if ($user) {
            return $user->update($data);
        }

        throw new Exception("User not found.");
    }

    public function findByName($name)
    {
        return User::where('name', 'LIKE', "%$name%")->get();
    }
}
