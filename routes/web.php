<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get( "/test/{id}", [ Test::class, "index" ]);
// Route::get( "/test/{id?}", [ Test::class, "index" ]);
// Route::get( "/test/{id}/{name}", [ Test::class, "index" ]);
// Route::get( "/test/{id}/{name?}", [ Test::class, "index" ]);

// Route::get( "/test/{id}/{name?}", function( $id, $name = "

// " ) {

//     echo "<h3>Id: </h3>" . $id;
//     echo "<h3>Id: </h3>" . $name;
// })->where([ "id" => "[0-9]+", "name" => "[a-zA-Z]+" ]);

// Route::get( "/teszt/{name}", function( $name ) {

//     return view(  "test", [ "name" => $name ] );
// });

// Route::get( "/teszt", [ Test::class, "index" ]);
// Route::get ( "/about", [ ServiceController::class, "index" ]);
// Route::get( "/about-admin", function() {

//     return view( "admin.about_admin", [ "names"
//     => [ "Béla", "Pista", "Kata", "Géza" ]]);
// });

Route::get( "/uj-diak", [ StudentController::class, "newStudent" ]);
Route::post( "/submit-student", [ StudentController::class, "submitStudent" ]);
Route::get("/lista",[ StudentController::class, "listStudent"]);