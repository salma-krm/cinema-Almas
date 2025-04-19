<?php

namespace App\Services;

use App\Repositories\Interfaces\IRole;
use App\Services\Interfaces\IRoleService;

class RoleService implements IRoleService
{
    protected $roleRepository;

    public function __construct(IRole $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function create($data)
    {
        return $this->roleRepository->create($data);
    }

    public function update($data)
    {
        return $this->roleRepository->update($data);
    }

    public function delete($id)
    {
        return $this->roleRepository->delete($id);
    }

    public function findByName($name)
    {
        return $this->roleRepository->findByName($name);
    }

    public function getById($id)
    {
        return $this->roleRepository->getById($id);
    }

    public function getAll()
    {
        return $this->roleRepository->getAll();
    }
}
