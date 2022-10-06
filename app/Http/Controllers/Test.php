<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller {
    
    public function index() {

        // $data = [ 
        //     "names" => "Béla"
        // ];

        return view( "test", [ "name" => "Béla" ] );
    }
}
