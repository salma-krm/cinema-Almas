<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest as HttpRequestsCreateRoleRequest;

use App\Http\Requests\UpdateRoleRequest as HttpRequestsUpdateRoleRequest;
use App\Services\Interfaces\IRoleService;
use Illuminate\Http\Request;
use Exception;

class RoleController extends Controller
{
    protected IRoleService $role;

    public function __construct(IRoleService $role)
    {
        $this->role = $role;
    }

    public function getAll()
    {
        $roles = $this->role->getAll();
        return view('admindashbord.role.roledashbord', compact('roles'));
    }

    public function create( HttpRequestsCreateRoleRequest $request)
    {
        try {
            $this->role->create($request->only('name'));
            return redirect('/role')->with('message', 'Role created successfully.');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function update(  HttpRequestsUpdateRoleRequest $request)
    {
        
        try {
            $this->role->update($request->only('id', 'name'));
            return redirect('/role')->with('message', 'Role updated successfully.');
        } catch (Exception $e) {
            return  redirect('/role')->with('error', $e->getMessage());
        }
    }

    public function delete($id)
    {
        $this->role->delete($id);
        return redirect('/role')->with('message', 'Role deleted.');
    }

    public function getById($id)
    {
        $role = $this->role->getById($id);
        if (!$role) {
            return redirect('/role')->with('error', 'Role not found.');
        }

        return view('admindashbord.role.roleupdate', compact('role'));
    }
}
