<?php
namespace app\Services\Interfaces;
interface IPaiementService{
  public function success();
  public function session();
  public function AjouterPanier($data);
  public function getPanier();
  public function deletPanier($id);
}