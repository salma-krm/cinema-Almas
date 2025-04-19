<?php
namespace App\Services\Interfaces;

interface IAuthService{
    public function login($data);
    public function register($data);
    public function logout();
}