<?php

namespace App\Repositories;

use App\Models\Role;
use App\Repositories\Interfaces\IRole;
use Exception;

class RoleRepository implements IRole
{
    public function create($data)
    {
        if ($this->findByName($data['name'])) {
            throw new Exception("Role already exists.");
        }

        $role = new Role();
        $role->name = $data['name'];
        $role->save();

        return $role;
    }

    public function update($data)
    {
        $role = Role::find($data['id']);
        if (!$role) {
            throw new Exception("Role not found.");
        }

        $role->name = $data['name'];
        $role->save();

        return $role;
    }

    public function delete($id)
    {
        $role = Role::find($id);
        if ($role) {
            $role->delete();
            return true;
        }

        return false;
    }

    public function findByName($name)
    {
        return Role::where('name', $name)->first();
    }

    public function getById($id)
    {
        return Role::find($id);
    }

    public function getAll()
    {
        return Role::all();
    }
    public function GetRole($name)
    {
        $role = Role::where('name', '=', $name)->first();
        return $role;
    }
}
