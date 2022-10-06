<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAnimalsData;

class Animals extends Controller
{
public function newAnimal(){
    return view("new_animal");
}

    
public function submitAnimal(StoreAnimalsData $request){
     $request->validated();
     print_r($request->all());
}

    }

