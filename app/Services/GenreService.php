<?php

namespace App\Services;

use App\Repositories\Interfaces\IGenre;
use App\Services\Interfaces\IGenreService;

class GenreService implements IGenreService
{
    protected $genreRepository;

    public function __construct(IGenre $genreRepository)
    {
        $this->genreRepository = $genreRepository;
    }

    public function show()
    {
        return $this->genreRepository->show();
    }

    public function create($data)
    {
        return $this->genreRepository->create($data);
    }

    public function delete($id)
    {
        return $this->genreRepository->delete($id);
    }

    public function update($data)
    {
        return $this->genreRepository->update($data);
    }

    public function findByName($name)
    {
        return $this->genreRepository->findByName($name);
    }

    public function getById($id)
    {
        return $this->genreRepository->getById($id);
    }

    public function getAll()
    {
        return $this->genreRepository->getAll();
    }
}
