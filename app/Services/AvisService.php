<?php
namespace App\Services;

use App\Exceptions\CustomException\InCompleteProcess;
use App\Models\Avis;
use App\Repositories\Interfaces\IAvis;
use App\Repositories\Interfaces\IFilm;
use App\Repositories\Interfaces\IUser;
use App\Services\Interfaces\IAvisService;

class AvisService implements IAvisService{
  private IAvis $avisRepo;
  private IUser $userrepo;
  private IFilm $filmrepo;


  public function __construct( IAvis $avisRepo,IUser $userrepo,IFilm $filmrepo)

  {
    $this->avisRepo = $avisRepo;
    $this->userrepo = $userrepo;
    $this->filmrepo = $filmrepo;
    
  }
  public function create( $data)
  {
    
    $userid = auth()->user();
     if(!$userid){
       throw new InCompleteProcess (' veuillez login in pour ecrivez commentaire');
     }
    $user = $this->userrepo->getById($userid->id);
    $film = $this->filmrepo->findById($data['film_id']);
     $avis = new Avis();
     $avis->description = $data['description'];
     $avis->rating =$data['rating'];
     $avis->user()->associate($user);
     $avis->film()->associate($film);
     $this->avisRepo->create($avis);


  }
  public function delete( $id){

  }
  public function update( $data){

  }
  public function findByName( $name){

  }
  public function findById($id){

  }
  public function getdetailfilm($id){

  }
  public function getAll(){

  }
}