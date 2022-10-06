<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentData;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller {
    
    public function newStudent() {

        return view( "new_student" );
    }

    public function submitStudent( StoreStudentData $request ) {

      $request->validated();
        print_r( $request->all() );
    }
    // public function messages() {

    //     return[
    //         "name.required"=>"Elvárt",
    //         "name.min"=>"Kevés",
    //         "email.required"=>"Elvárt",
    //         "name.required"=>"Elvárt"
    //     ];
    // }
//Select* from students where name = "Kata" and "email" ="valaqmi@teszt.hu
    public function listStudent(){
        $students =DB::table("students")->where("id",6)->where("name",
         "Buster Muller")->get();
        echo "<pre>";
        print_r($students);
    }
}






// /** $request->validate([

//             "name" => "required|min:4|max:20",
//             "email" => "required", //megnézi hogy létezik-e az email
//             "phone" => "required|digits_between:9,11"
//         ],[
//             "name.required"=> "Név kitöltése kötelező!",
//             "email.required"=> "Email kitöltése kötelező!",
//             "phone.required"=> "Telefon kitöltése kötelező!"
//         ]);

