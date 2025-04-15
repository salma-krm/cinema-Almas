<?php

namespace App\Services\Interfaces;

interface IUserService
{
    public function register(array $data);
    public function login(array $data);
}

