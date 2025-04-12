<?php


namespace App\Repositories;
use App\Models\User;

class UserRepository implements UserRepository
{
    public function register( $data){
        $user = new User();
        $user->name = $data['name'];
        $user->email =$data['email'];
        $user->password =$data['password'];
        $user->save();

        
    }

public function findByEmail($email) {



}
public function delete($id){



} 
public function Update($data , $id){



}
public function FindbyName($name){


} 
 
    
}
