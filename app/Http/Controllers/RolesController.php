<?php

namespace App\Http\Controllers;

use App\Http\Requests\Rule\CreateRuleRequest;
use Exception;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    protected $rolle;
    public function __construct(){

    }
    public function create (Request $request){
        $validatedData = $request->validated();
        try {
            $this->rolle->create($validatedData);
            return back()->with('message', 'Salle created');
        } catch (Exception $e) {
            return back()->with('message', $e->getMessage());
        }

    }
    public function update(){

    }
    public function edit(){
    }
    public function delte(){

    }
    public function findByName(){
    }

}
