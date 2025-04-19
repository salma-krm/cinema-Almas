<?php

namespace App\Services;

use App\Repositories\Interfaces\ISalle;
use App\Services\Interfaces\ISalleService;

class SalleService implements ISalleService
{
    protected $salleRepository;

    public function __construct(ISalle $salleRepository)
    {
        $this->salleRepository = $salleRepository;
    }

    public function show()
    {
        return $this->salleRepository->show();
    }

    public function create($data)
    {
        return $this->salleRepository->create($data);
    }

    public function delete($id)
    {
        return $this->salleRepository->delete($id);
    }

    public function update($data)
    {

        return $this->salleRepository->update($data);
    }

    public function findById($id)
    {
        return $this->salleRepository->findById($id);
    }

    public function findByName($name)
    {
        return $this->salleRepository->findByName($name);
    }
}
