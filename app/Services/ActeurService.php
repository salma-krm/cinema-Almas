<?php
namespace App\Services;
use App\Repositories\Interfaces\IActeur;
use App\Services\Interfaces\IActeurService;


class ActeurService implements IActeurService
{
    protected  IActeur $acteurRepository;

    public function __construct(IActeur $acteurRepository)
    {
        $this->acteurRepository = $acteurRepository;
    }

    public function show()
    {
        return $this->acteurRepository->show();
    }

    public function create($data)
    {
        return $this->acteurRepository->create($data);
    }

    public function delete($id)
    {
        return $this->acteurRepository->delete($id);
    }

    public function update($data)
    {
        return $this->acteurRepository->update($data);
    }

    public function findByName($name)
    {
        return $this->acteurRepository->findByName($name);
    }

    public function getById($id)
    {
        return $this->acteurRepository->getById($id);
    }

    public function getAll()
    {
        return $this->acteurRepository->getAll();
    }
}
